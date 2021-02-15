<div>
<div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add steps if required.</h2>    
        <span wire:click="increment" class="fas fa-plus-circle px-2 py-1 cursor-pointer"/>
    </a>
</div>
@foreach($steps as $step)
<div class="flex justify-center py-2" wire:key="{{$step}}">
<input type="text" name="step[]" class="py-1 px-2 border rounded" placeholder="{{'Describe step ' . ($step+1)}}"/>
<span wire:click="remove({{$step}})" class="fas fa-times text-red-400 p-2 cursor-pointer"></span>
</div>
@endforeach
  
</div>
