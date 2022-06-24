<?php

namespace App\Http\Livewire;

use App\Models\Horse;
use App\Traits\AnimalCounter;
use Livewire\Component;

class HorseCounter extends Component
{
    use AnimalCounter;

    public Horse $animal;

    public function mount()
    {
        $this->animal = Horse::first();
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
