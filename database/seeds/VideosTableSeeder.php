<?php

use Illuminate\Database\Seeder;

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
                'target_id' => '0,1',
            ],
            [
                'id' => '2',
                'user_id' =>'2',
                'url' => 'NCJZgcvh_Xs',
                'target_id' => '3',
            ],
            [
                'id' => '3',
                'user_id' =>'3',
                'url' => '5NHinUvC2wg',
                'target_id' => '3',
            ],
            [
                'id' => '4',
                'user_id' =>'4',
                'url' => 'HHO22TK78Yo',
                'target_id' => '2,3',
            ],
            [
                'id' => '5',
                'user_id' =>'5',
                'url' => 'ZioFWxb1U0s',
                'target_id' => '2',
            ],
        ]);
    }
}
