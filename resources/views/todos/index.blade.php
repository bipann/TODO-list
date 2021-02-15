@extends('todos.layout')
@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class='text-2xl'>All your Todos</h1>
    
    <a href="{{route('todo.create')}}" class="mx-5 py-2 text-blue-300 cursor-pointer text-white">
        <span class="fas fa-plus-circle"/></span>
    </a>
</div>
<x-alert/>
        <ul class="'my-5">
            @forelse($todos as $todo)
            <li class="flex justify-between p-2">
            <div>@include('todos.completeButton')</div>
            @if($todo->completed)
            <p class="line-through">{{$todo->title}}</p>
            @else
            <a class="cursor-pointer" href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</p>
            @endif
                <div>                    
                    <a href="{{'/todo/'.$todo->id.'/edit'}}" class="text-yellow-400 cursor-pointer text-white">
                        <span class="fas fa-edit px-1"/>
                    </a>

                    
                        <span class="fas fa-trash text-red-500 px-1 cursor-pointer"
                        onclick="event.preventDefault();
                            if(confirm('Do ypu really want to delete?'))
                            {
                                document.getElementById('form-delete-{{$todo->id}}')
                                .submit()
                            }"/>
                            
                    
                    <form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post" 
                    action="{{route('todo.destroy', $todo->id)}}">
                    @csrf
                    @method('delete')
                    </form>
                    
                </div>
                
                                
            </li>
            @empty
                <p>No task available</p>
            @endforelse
        </ul>
@endsection