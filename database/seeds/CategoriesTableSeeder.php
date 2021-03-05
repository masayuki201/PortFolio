<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => '0'
                'target_grade' => '年少々',
            ],
            [
                'id' => '1'
                'target_grade' => '年少',
            ],
            [
                'id' => '2'
                'target_grade' => '年中',
            ],
            [
                'id' => '3'
                'target_grade' => '年長',
            ],
        ]);
    }
}
