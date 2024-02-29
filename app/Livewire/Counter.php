<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{   

    public $value = 0;

    public function Increase() {

        $this->value++;

        
    }

    public function Decrease() {

        $this->value--;

        
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
