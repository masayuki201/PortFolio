@extends('layout.app')

@section('title','ちるび/ランキングページ')

@section('content')
<div class="container">
    <div class="my-5">
        <h4>再生回数ランキング</h4>
    </div>
    <div class="video row mt-5 text-center">
        @foreach ($arrayVideo as $key => $user)
        @php
            $video=$user;
        @endphp
        {{-- 動画を縦に1つずつ表示させる --}}
    </div>
    <div class="row text-center mt-3">
    <div class="col-sm-12 mb-5">
        <div class="video text-left d-inline-block">
            {{-- ニックネーム表示 --}}
            ＠{{ $video->user['nickname'] }}

            {{-- <div class="embed-responsive embed-responsive-16by9">
                @if($video)
                    <iframe class="embed-responsive-item"  src="{{ 'https://www.youtube.com/embed/'.$video->url }}?controls=1&loop=1&playlist={{ $video->url }}" allowfullscreen></iframe>
                @else
                    <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/" allowfullscreen></iframe>
                @endif
            </div>
 --}}
            <div>
                {{-- 動画を表示 --}}
                @if($video)
                    <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$video->url }}?controls=1&loop=1&playlist={{ $video->url }}" allowfullscreen></iframe>
                @else
                    <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" allowfullscreen></iframe>
                @endif
            </div>

            <p>
                {{-- 対象学年表示 --}}
                おすすめ：{{ $video->target['target_grade'] }}さん<br>
                {{-- 再生回数表示 --}}
                再生回数：{{ $viewCountRanking[$video->id-1] }}回
            </p>
        </div>
    </div>
        @endforeach
    </div>
</div>
@endsection
