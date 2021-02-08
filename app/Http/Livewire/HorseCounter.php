<?php

namespace App\Http\Livewire;

use App\Models\Horse;
use Livewire\Component;

class HorseCounter extends Component
{
    public Horse $horse;

    public function mount()
    {
        $this->horse = Horse::first();
    }

    public function render()
    {
        return view('livewire.horse-counter');
    }

    public function increment()
    {
        $this->horse->increment('amount');
    }

    public function decrement()
    {
        $this->horse->decrement('amount');
    }
}
