<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // callメソッドを使用して、順番に実行したいシーダクラス名を渡す
        $this->call(UsersTableSeeder::class);
        $this->call(TargetsTableSeeder::class);
        $this->call(VideosTableSeeder::class);

    }
}
