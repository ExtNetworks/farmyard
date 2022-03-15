<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use Livewire\Component;

class SheepCounter extends Component
{
    public Animal $sheep;

    public function mount()
    {
        $this->sheep = Animal::where('name','=','Sheep')->first();
    }

    public function render()
    {
        return view('livewire.sheep-counter');
    }

    public function increment()
    {
        $this->sheep->increment('amount');
    }

    public function decrement()
    {
        if($this->sheep->amount > 1){
            $this->sheep->decrement('amount');
        }
    }
}
