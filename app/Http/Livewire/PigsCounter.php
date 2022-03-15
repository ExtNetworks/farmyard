<?php

namespace App\Http\Livewire;

use App\Models\Pigs;
use Livewire\Component;

class PigsCounter extends Component
{
    public Pigs $pigs;

    public function mount()
    {
        $this->pigs = Pigs::first();
    }

    public function render()
    {
        return view('livewire.pigs-counter');
    }

    public function increment()
    {
        $this->pigs->increment('amount');
    }

    public function decrement()
    {
        if($this->pigs->amount > 1){
            $this->pigs->decrement('amount');
        }
    }
}
