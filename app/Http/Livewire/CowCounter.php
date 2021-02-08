<?php

namespace App\Http\Livewire;

use App\Models\Cow;
use Livewire\Component;

class CowCounter extends Component
{
    public Cow $cow;

    public function mount()
    {
        $this->cow = Cow::first();
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
}
