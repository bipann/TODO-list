@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl pb-4">What do you need to do?</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"/>
    </a>
</div>

<x-alert/>
<form method="post" action="{{route('todo.store')}}" class="py-5 ">
    @csrf
    <div class="py-2"><input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title"/></div>
    <div class="py-2"><textarea name="detail" class="p-2 rounded border" placeholder="Details"></textarea></div>
    <div class="py-2">
        
       
@livewire('step')

        </div>
    <div class="py-2"><input type="submit" value="Create" class="p-2 border rounder"/></div>
    
    
    
        
</form>


@endsection
      