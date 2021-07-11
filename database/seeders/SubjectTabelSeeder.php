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
        $sub = ['Compiuterni mereji','Algebra','Dif rivneanea','Baz danih','Sotiologia','Filosofia','It-biznes','UML','UI/UX','WEB'];
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('subj')->insert([
                'name_subj' => $faker->randomElement($sub),
                'numb_semest' => $faker->numberBetween(1,2),
                'created_at' => $faker->dateTime($max='now'),
                'updated_at' => $faker->dateTime($max='now'),
            ]);
            }
    }
}
