<?php

namespace App\Traits;

trait AnimalCounter
{
    public function increase(): void
    {
        $this->animal->increment('amount');
    }

    public function decrease(): void
    {

        if ($this->animal->amount === $this->animal->minCount) {
            return;
        }

        $this->animal->decrement('amount');

    }
}
