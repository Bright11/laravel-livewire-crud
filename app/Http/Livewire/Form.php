<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $form="God is good";
    public $name="Bright God";
    public function resetname($name){
        $this->name=$name;
    }
    public function render()
    {
        return view('livewire.form');
    }
}
