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
        $sub = ['Компютерні мережі','Алгебра','Диф рівняння','Бази даних','Соціологія','Фіолософія','Іт-бізнес','УМЛ','UI/UX','WEB-технології та WEB-дизайн'];
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
