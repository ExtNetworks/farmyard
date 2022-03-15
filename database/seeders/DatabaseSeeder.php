<?php

namespace Database\Seeders;

// use App\Models\Cow;
// use App\Models\Horse;
// use App\Models\Sheep;
use App\Models\Animal;
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
        Animal::factory()->createOne(['name' => 'Sheep', 'price' => 100]);
        Animal::factory()->createOne(['name' => 'Cows', 'price' => 250]);
        Animal::factory()->createOne(['name' => 'Horses', 'price' => 400]);
        Animal::factory()->createOne(['name' => 'Pigs', 'price' => 100]);
        User::factory()->createOne(['email' => 'admin@farmyard.xyz']);
    }
}
