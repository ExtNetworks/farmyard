<?php

namespace Database\Seeders;

use App\Models\Cow;
use App\Models\Horse;
use App\Models\Sheep;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cow = Cow::first();
        $cow->amount = 250;
        $cow->save();

        $sheep = Sheep::first();
        $sheep->amount = 100;
        $sheep->save();

        $horse = Horse::first();
        $horse->amount = 400;
        $horse->save();
    }
}
