<?php

namespace App\Traits;

trait AnimalCounter
{
    public function increase(): void
    {
        $this->animal->increment('count');
    }

    public function decrease(): void
    {

        if ($this->animal->count === $this->animal->minCount) {
            return;
        }

        $this->animal->decrement('count');

    }
}
