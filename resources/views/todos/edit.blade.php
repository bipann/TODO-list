@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
<h1 class="text-2xl  pb-4">Update this todo list</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"/>
    </a>
</div>          

<x-alert/>  
<form method="post" action="{{route('todo.update',$todo->id)}}" class="py-5 ">
    @csrf   
    @method('patch')
    <div class="py-2"><input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded"/></div>
    <div class="py-2"><textarea name="detail" class="p-2 rounded border" placeholder="Detail">{{$todo->detail}}</textarea></div>
    <div class="py-2">
        @livewire('edit-step', ['steps'=>$todo->steps]) 
    </div>
    <div class="py-2"><input type="submit" value="Update" class="p-2 border rounder"/></div>
    
    
    
        
</form>

@endsection
      

