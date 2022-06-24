<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use App\Models\Cow;
use App\Traits\AnimalCounter;
use Livewire\Component;

class CowCounter extends Component
{
    use AnimalCounter;

    public Animal $animal;

    public function mount()
    {
        $this->animal = Animal::where('name', 'Cow')->first();
    }

    public function render()
    {
        return view('livewire.cow-counter');
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
