<?php

namespace Tests\Unit;

use App\Http\Livewire\CowCounter;
use App\Models\Cow;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CowCounterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_should_increment_the_number_of_cows()
    {
        $cow = Cow::factory()->createOne();
        
        $cowCounter = new CowCounter();
        $cowCounter->cow = $cow;
        $cowCounter->increment();

        $this->assertEquals(1, $cow->fresh()->amount);
    }

    /** @test */
    public function it_should_decrement_the_number_of_cows()
    {
        $cow = Cow::factory()->createOne(['amount' => 2]);
        
        $cowCounter = new CowCounter();
        $cowCounter->cow = $cow;
        $cowCounter->decrement();

        $this->assertEquals(1, $cow->fresh()->amount);
    }

    /** @test */
    public function it_should_not_decrement_lower_than_one()
    {
        $cow = Cow::factory()->createOne(['amount' => 1]);
        
        $cowCounter = new CowCounter();
        $cowCounter->cow = $cow;
        $cowCounter->decrement();

        $this->assertEquals(1, $cow->fresh()->amount);
    }
}
