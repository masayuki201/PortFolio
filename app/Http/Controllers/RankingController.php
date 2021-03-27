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

        /*
        $collection = collect([
            ['video_id' => '1', 'viewCount' => ],
            ])

        //再生回数が多い順に並び替え、10動画だけ抜き取る
        $ranking = $collection->sortByDesc('viewCount')->take(10)->get();
        */

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

        // dd($viewCountRanking);

        arsort($viewCountRanking);

        // var_dump($viewCountRanking);

        // dd($viewCountRanking);

        foreach($viewCountRanking as $key => $video){
            $video = Video::where('id', $key+1)->first();
            $arrayVideo[] = $video;

            // $arrayVideo = 0;
            // while($arrayVideo < 5){
            //     echo $arrayVideo;
            //     $arrayVideo ++;
            // }

        }

        // dd($arrayVideo);
        // dd($viewCountRanking);

        return view('ranking',['arrayVideo' => $arrayVideo, 'viewCountRanking' => $viewCountRanking ]);
    }

}
