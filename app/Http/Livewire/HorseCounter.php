<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use App\Traits\AnimalCounter;
use Livewire\Component;

class HorseCounter extends Component
{
    use AnimalCounter;

    public Animal $animal;

    public function mount()
    {
         $this->animal = Animal::where('name', 'Horse')->first();
    }

    public function render()
    {
        return view('livewire.horse-counter');
    }

    public function increment()
    {
        $this->increase();
    }

    public function decrement()
    {
        $this->decrease();
    }
}
