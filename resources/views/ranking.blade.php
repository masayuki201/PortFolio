@extends('layout.app')

@section('title','ちるび/ランキングページ')

@section('content')
<div class="container">
    <div class="mt-5 mb-5">
        <h4>再生回数ランキング</h4>
    </div>
    <div class="video row mt-5 text-center">
        @foreach ($users as $key => $user)

        @php

        $video=$user;

        if($video){

        $key_name = config('app.key_name');
        $get_api_url = "https://www.googleapis.com/youtube/v3/videos?id=$video->url&key=$key_name&part=snippet";
        $json = file_get_contents($get_api_url);

        if($json){
            $getData = json_decode( $json , true);
            if($getData['pageInfo']['totalResults']==0){
                $video_title="※動画が未登録です";
            }else{
                $video_title=$getData['items']['0']['snippet']['title'];
            }
        }else{
            $video_title="※一時的な情報制限中です";
        }
        }



        @endphp
            @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
                </div>
                <div class="row text-center mt-3">
            @endif
                <div class="col-lg-4 mb-5">
                    <div class="video text-left d-inline-block">
                        ＠{{ $video->user->nickname }}
                        <div>
                            @if($video)
                                <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$video->url }}?controls=1&loop=1&playlist={{ $video->url }}" frameborder="0"></iframe>
                            @else
                                <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" frameborder="0"></iframe>
                            @endif
                        </div>
                        <p>
                        おすすめ：{{ $video->target['target_grade'] }}さん
                        </p>
                    </div>
                </div>
        @endforeach
    </div>
</div>

@endsection
