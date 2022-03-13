<?php

namespace App\Http\Livewire;

use App\Models\Cow;
use App\Models\Sheep;
use App\Models\Horse;
use Livewire\Component;

class Accounting extends Component
{
    public $totalAnimals;
    public $totalPrice;

    public function mount()
    {
        $this->totalAnimals = Cow::first()->amount + Sheep::first()->amount + Horse::first()->amount;
        $this->totalPrice = Cow::first()->price + Sheep::first()->price + Horse::first()->price;
    }

    public function render()
    {
        return view('livewire.accounting');
    }
}
