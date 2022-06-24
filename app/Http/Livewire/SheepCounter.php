<?php

namespace App\Http\Livewire;

use App\Models\Sheep;
use App\Traits\AnimalCounter;
use Livewire\Component;

class SheepCounter extends Component
{
    use AnimalCounter;

    public Sheep $animal;

    public function mount()
    {
        $this->animal = Sheep::first();
    }

    public function render()
    {
        return view('livewire.sheep-counter');
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
