<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GroupTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static $groupes=[
        '402',
        '403',
        '413',
        '102',
        '103',
        '104',
        '202',
        '203',
        '213',
        '302',
        '309',
        '404'
    ];
    public function run()
    {
        foreach (self::$groupes as $group) {
            DB::table('group')->insert([
                'name_group' => $group
            ]);

        }
    }
}
