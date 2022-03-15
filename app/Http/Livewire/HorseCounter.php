<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use Livewire\Component;

class HorseCounter extends Component
{
    public Animal $horse;

    public function mount()
    {
        $this->horse = Animal::where('name','=','Horses')->first();
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
        if($this->horse->amount > 1){
            $this->horse->decrement('amount');
        }
    }
}
