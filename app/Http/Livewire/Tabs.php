<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tabs extends Component
{
    public $step;

    protected $queryString = ['step'];

    public function render()
    {
        return view('livewire.tabs');
    }
}
