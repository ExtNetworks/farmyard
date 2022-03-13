<?php

namespace App\Http\Livewire;

use App\Models\Sheep;
use Livewire\Component;

class SheepCounter extends Component
{
    public Sheep $sheep;

    public function mount()
    {
        $this->sheep = Sheep::first();
        $this->price = $this->sheep->price;
    }

    public function render()
    {
        return view('livewire.sheep-counter');
    }

    public function increment()
    {
        $this->sheep->increment('amount');
        $this->sheep->increment('amount');
    }

    public function decrement()
    {
        $this->sheep->decrement('amount');
    }

    public function updatePrice()
    {
        $this->validate([
            'price' => 'integer'
        ], [
            'price.integer' => 'Please enter a valid price'
        ]);

        Sheep::first()->update([
            'price' => $this->price
        ]);
    }
}
