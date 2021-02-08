<?php

namespace Tests\Unit;

use App\Http\Livewire\HorseCounter;
use App\Models\Horse;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HorseCounterTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_should_increment_the_number_of_horses()
    {
        $horse = Horse::factory()->createOne();
        
        $horseCounter = new HorseCounter();
        $horseCounter->horse = $horse;
        $horseCounter->increment();

        $this->assertEquals(1, $horse->fresh()->amount);
    }

    public function it_should_decrement_the_number_of_horses()
    {
        $horse = Horse::factory()->createOne(['amount' => 1]);
        
        $horseCounter = new HorseCounter();
        $horseCounter->horse = $horse;
        $horseCounter->decrement();

        $this->assertEquals(0, $horse->fresh()->amount);
    }
}
