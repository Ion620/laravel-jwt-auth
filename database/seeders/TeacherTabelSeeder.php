<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $nauka=['Доцент','Старший','Професор'];
        $faker = Faker::create();
        foreach (range(1,30) as $index) {
            DB::table('teacher')->insert([
                'name_teacher' => $faker->name,
                'position' => 'Викладач',
                'scientific_degree' => $faker->randomElement($nauka),
                'created_at' => $faker->dateTime($max='now'),
                'updated_at' => $faker->dateTime($max='now'),
            ]);
        }
    }
}
