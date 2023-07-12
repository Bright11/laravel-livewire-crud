<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Indexpage extends Component
{
    public $name="chika";
    public $checkme=false;
    public $talk="Goodbye";
    public function render()
    {
        return view('livewire.indexpage');
    }
}
