<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step extends Component
{
    public $steps = [];
    public function increment()
    {
        $this->steps[] =count($this->steps);
    }
    public function remove($idex)
    {
        unset($this->steps[$idex]);
        
    }
    public function render()
    {
        return view('livewire.step');
    }
}
