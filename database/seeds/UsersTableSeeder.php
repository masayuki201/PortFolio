<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                // ユーザID:1
                'nickname' => '信長のパパ',
                'email'=> 'oda@oda.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
                // ユーザID:2
                'nickname' => '秀吉のママ',
                'email'=> 'toyo@otoyo.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
                // ユーザID:3
                'nickname' => '式部のママ',
                'email'=> 'mura@omura.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
                // ユーザID:4
                'nickname' => '納言のパパ',
                'email'=> 'sei@sei.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
                // ユーザID:5
                'nickname' => '家康のパパ',
                'email'=> 'toku@toku.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
                // ユーザID:6
                'nickname' => '光秀のじいじ',
                'email'=> 'ake@ake.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
                // ユーザID:7
                'nickname' => '義経のばあば',
                'email'=> 'ashi@ashi.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
                // ユーザID:8
                'nickname' => '妹子のばあば',
                'email'=> 'ono@ono.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
        ]);
    }
}
