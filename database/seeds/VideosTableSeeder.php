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
                // 動画ID:1
                'user_id' =>'1',
                'url' => 'PkDfrVdCwCs',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                // 動画ID:2
                'user_id' =>'2',
                'url' => 'NCJZgcvh_Xs',
                'target_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                // 動画ID:3
                'user_id' =>'3',
                'url' => '5NHinUvC2wg',
                'target_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                // 動画ID:4
                'user_id' =>'4',
                'url' => 'wZhfuy9HEro',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                // 動画ID:5
                'user_id' =>'5',
                'url' => 'ZioFWxb1U0s',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'6',
                'url' => 'X-Q0z0V8VnI',
                'target_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'7',
                'url' => '86a6kVd3-1M',
                'target_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'8',
                'url' => 'nSQnMV45rJs',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'1',
                'url' => 'lZRNUvDOzmY',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'2',
                'url' => 'rPrNkxWdP_Y',
                'target_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'3',
                'url' => 'lAPNiQB1Z7s',
                'target_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'4',
                'url' => 'KaVS4yQUK6o',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'5',
                'url' => 'gOwhKcutnpc',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'6',
                'url' => 'Oj62PMMT4Bk',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'7',
                'url' => 'cPt926Cx_fI',
                'target_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'8',
                'url' => 'vHhiPKeYe60',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'1',
                'url' => 'gF4m7sCQ-4c',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'2',
                'url' => 'VvY9TEDtets',
                'target_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'3',
                'url' => 'VyKLQXOj0ts',
                'target_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' =>'4',
                'url' => '3aCOg-ZnCmI',
                'target_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
