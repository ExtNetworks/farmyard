<?php

namespace App\Http\Livewire;

use App\Models\Cow;
use Livewire\Component;

class CowCounter extends Component
{
    public Cow $cow;
    public $price;

    public function mount()
    {
        $this->cow = Cow::first();
        $this->price = $this->cow->price;
    }

    public function render()
    {
        return view('livewire.cow-counter');
    }

    public function increment()
    {
        $this->cow->increment('amount');
    }

    public function decrement()
    {
        $this->cow->decrement('amount');
    }

    public function updatePrice()
    {
        $this->validate([
            'price' => 'integer'
        ], [
            'price.integer' => 'Please enter a valid price'
        ]);

        Cow::first()->update([
            'price' => $this->price
        ]);
    }
}
