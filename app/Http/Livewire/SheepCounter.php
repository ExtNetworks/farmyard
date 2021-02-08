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
}
