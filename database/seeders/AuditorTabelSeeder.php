<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuditorTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('auditor')->insert([
                'capacity' => $faker->numberBetween(1, 30),
                'name_aud' => $faker->numberBetween(1, 100),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);

        }
    }
}
