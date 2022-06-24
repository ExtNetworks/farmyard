<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;

class AnimalSoundModal extends Component
{

    protected $listeners = ['toggleShow' => 'toggleShow'];
    public string $sound;
    public bool $show;

    public function mount() {
        $this->show = false;
    }

    public function toggleShow($sound) {
        $this->sound = $sound;
        $this->show = !$this->show;
    }

    public function doClose() {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.modals.animal-sound-modal');
    }
}
