<?php

namespace Tests\Unit;

use App\Http\Livewire\SheepCounter;
use App\Models\Sheep;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SheepCounterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_should_increment_the_number_of_sheep()
    {
        $sheep = Sheep::factory()->createOne();
        
        $sheepCounter = new SheepCounter();
        $sheepCounter->sheep = $sheep;
        $sheepCounter->increment();

        $this->assertEquals(1, $sheep->fresh()->amount);
    }

    /** @test */
    public function it_should_decrement_the_number_of_sheep()
    {
        $sheep = Sheep::factory()->createOne(['amount' => 2]);
        
        $sheepCounter = new SheepCounter();
        $sheepCounter->sheep = $sheep;
        $sheepCounter->decrement();

        $this->assertEquals(1, $sheep->fresh()->amount);
    }

    /** @test */
    public function it_should_not_decrement_lower_than_one()
    {
        $sheep = Sheep::factory()->createOne(['amount' => 1]);
        
        $sheepCounter = new SheepCounter();
        $sheepCounter->sheep = $sheep;
        $sheepCounter->decrement();

        $this->assertEquals(1, $sheep->fresh()->amount);
    }
}
