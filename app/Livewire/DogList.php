<?php

namespace App\Livewire;

use Livewire\Component;

class DogList extends Component
{
    public function render()
    {
        $dogs = [
            [
                'name' => 'Buddy',
                'breed' => 'Golden Retriever',
                'price' => 2500,
                'image' => 'https://placedog.net/400?id=1',
            ],
            [
                'name' => 'Luna',
                'breed' => 'Labrador',
                'price' => 2300,
                'image' => 'https://placedog.net/400?id=2',
            ],
            [
                'name' => 'Max',
                'breed' => 'Beagle',
                'price' => 2000,
                'image' => 'https://placedog.net/400?id=3',
            ],
        ];

        return view('livewire.dog-list', compact('dogs'));
    }
}
