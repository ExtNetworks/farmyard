<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animals = [
            [
                'name' => 'Sheep',
                'sound' => 'Baaa baaa',
                'min_count' => '0',
                'count' => '0',
                'amount' => '100',
            ],
            [
                'name' => 'Cow',
                'sound' => 'Moo moo',
                'min_count' => '0',
                'count' => '0',
                'amount' => '250',
            ],
            [
                'name' => 'Horse',
                'sound' => 'Neighhhh',
                'min_count' => '0',
                'count' => '0',
                'amount' => '400',
            ],
            [
                'name' => 'Pig',
                'sound' => 'Oink oink',
                'min_count' => '2',
                'count' => '0',
                'amount' => '150',
            ]
        ];

        foreach ($animals as $animal) {
            Animal::create($animal);
        }
    }
}
