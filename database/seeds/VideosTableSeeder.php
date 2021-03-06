<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'id' => '1',
                'user_id' =>'1',
                'url' => 'PkDfrVdCwCs',
                'target_id' => '0',
                'regist_date' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '2',
                'user_id' =>'2',
                'url' => 'NCJZgcvh_Xs',
                'target_id' => '3',
                'regist_date' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'user_id' =>'3',
                'url' => '5NHinUvC2wg',
                'target_id' => '3',
                'regist_date' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '4',
                'user_id' =>'4',
                'url' => 'HHO22TK78Yo',
                'target_id' => '2',
                'regist_date' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '5',
                'user_id' =>'5',
                'url' => 'ZioFWxb1U0s',
                'target_id' => '1',
                'regist_date' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
