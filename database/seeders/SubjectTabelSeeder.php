<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTabelSeeder extends Seeder
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
                'name_subj' => $faker->name,
                'numb_semest' => $faker->numberBetween(1,2),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
    }
}
