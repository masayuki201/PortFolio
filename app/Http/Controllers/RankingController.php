<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;

class RankingController extends Controller
{
    //ランキング
    public function index()
    {
        //DBに登録されている動画を取得する
        //$ranking = Video::all();

        //DBに登録されている動画のid:1〜10の動画を表示
        //$ranking = Video::take(10)->get();


        $ranking = Video::all()->sortByDesc('viewCount')->take(10);



        /*
        $collection = collect([
            ['video_id' => '1', 'viewCount' => ],
        ])

        //再生回数が多い順に並び替え、10動画だけ抜き取る
        $ranking = $collection->sortByDesc('viewCount')->take(10)->get();
        */




        return view('ranking',['ranking' => $ranking,]);
    }


}
