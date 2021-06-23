<?php

namespace Database\Seeders;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class StudentTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groupID = DB::table('group')->pluck('id');
        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('student')->insert([
                'id_group' => $faker->randomElement($groupID),
                'name_student' => $faker->name,
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);

        }
    }
}
