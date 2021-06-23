<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoscladTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groupID = DB::table('group')->pluck('id');
        $subID = DB::table('subj')->pluck('id');
        $teacherID = DB::table('teacher')->pluck('id');
        $audID = DB::table('auditor')->pluck('id');
        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('rosklad')->insert([
                'id_group' => $faker->randomElement($groupID),
                'id_subj' => $faker->randomElement($subID),
                'id_teacher' => $faker->randomElement($teacherID),
                'id_aud' => $faker->randomElement($audID),
                'numb_lec' => $faker->numberBetween(1,8),
                'day'=>$faker->numberBetween(1,2),
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);

        }
    }
}
