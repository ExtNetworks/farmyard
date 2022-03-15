<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use Livewire\Component;

class CowCounter extends Component
{
    public Animal $cow;

    public function mount()
    {
        $this->cow = Animal::where('name','=','Cows')->first();
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
        if($this->cow->amount > 1){
            $this->cow->decrement('amount');
        }
    }
}
