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
        // DBに登録されている動画を取得する
        $ranking = Video::all();

        return view('ranking',['ranking' => $ranking,]);
    }


}
