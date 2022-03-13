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
        $this->price = $this->horse->price;
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

    public function updatePrice()
    {
        $this->validate([
            'price' => 'integer'
        ], [
            'price.integer' => 'Please enter a valid price'
        ]);

        Horse::first()->update([
            'price' => $this->price
        ]);
    }
}
