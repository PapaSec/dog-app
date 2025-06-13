<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Dog;

class DogList extends Component
{
    public function render()
    {
        $dogs = Dog::latest()->get();

        return view('livewire.dog-list', compact('dogs'));
    }
}
