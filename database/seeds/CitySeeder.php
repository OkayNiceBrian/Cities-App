<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // delete all cities first
            // because the data has been manipulated a lot, it makes sense to start fresh
        // iterate N times to create that many cities
        // create a city with random data

        \App\City::query()->delete();

        $faker = Faker\Factory::create();

        foreach(range(1, 100) as $number){
            \App\City::create([
                'name' => $faker->city,
                'state' => $faker->state,
                'population_2010' => $faker->numberBetween(1, 100000),
                'population_rank' => $faker->numberBetween(1, 100)
            ]);
        }
    }
}
