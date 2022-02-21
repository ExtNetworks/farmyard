<?php

namespace Database\Seeders;

use App\Models\Cow;
use App\Models\Horse;
use App\Models\Sheep;
use App\Models\User;
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

        User::factory()->createOne(['email' => 'admin@farmyard.xyz']);
    }
}
