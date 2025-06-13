<?php

namespace App\Livewire;

use App\Models\Dog;
use Livewire\Component;

class DogDetails extends Component
{
    public Dog $dog;

    public function mount(Dog $dog)
    {
        $this->dog = $dog;
    }

    public function render()
    {
        return view('livewire.dog-details', [
            'title' => $this->dog->name,
        ]);
    }
}
