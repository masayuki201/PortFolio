<?php

use Illuminate\Database\Seeder;

class TargetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('targets')->insert([
            [
                // 対象ID:1
                'target_grade' => '🐥 年少々',
            ],
            [
                'target_grade' => '🐰 年少',
            ],
            [
                'target_grade' => '🐼 年中',
            ],
            [
                'target_grade' => '🐘 年長',
            ],
        ]);
    }
}
