<?php

namespace Database\Seeders;

use App\Models\Cow;
use App\Models\Horse;
use App\Models\Sheep;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Sheep::factory()->createOne();
        Cow::factory()->createOne();
        Horse::factory()->createOne();
    }
}
