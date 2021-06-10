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
        $group = Group::all()->pluck('id');
        $faker = Faker::create();
        foreach (range(1,2) as $index) {
            DB::table('student')->insert([
                'id_group' => $faker->$group,
                'name_student' => $faker->name,
            ]);
        }
    }
}
