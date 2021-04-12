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

        $viewCountRanking = [];
        $setVideo = Video::all();

        foreach ($setVideo as $onlyVideo){
            $video=$onlyVideo;
            $key_name = config('app.key_name');
            $get_api_url = "https://www.googleapis.com/youtube/v3/videos?part=statistics&id=$video->url&fields=items%2Fstatistics&key=$key_name";
            $json = file_get_contents($get_api_url);
            $getData = json_decode( $json , true);
            foreach((array)$getData['items'] as $key => $gDat){
                $viewCountRanking[] = $gDat['statistics']['viewCount'];
            }
        }


        arsort($viewCountRanking);


        foreach($viewCountRanking as $key => $video){
            $video = Video::where('id', $key+1)->first();
            $arrayVideo[] = $video;


        }


        return view('ranking',['arrayVideo' => $arrayVideo, 'viewCountRanking' => $viewCountRanking ]);
    }

}
