@extends('layout.app')

@section('title','ちるび/みんなの動画ページ')

@section('content')
<div class="container">
    <div class="mt-5 mb-5">
        <h4>みんなの動画</h4>
    </div>
    <div class="video row mt-5 text-center">
        @foreach ($users as $key => $user)

        @php

        $video=$user;

        @endphp
        {{-- 動画を横に3つずつ表示させる --}}
            @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
                </div>
                <div class="row text-center mt-3">
            @endif
                <div class="col-lg-4 mb-5">
                    <div class="video text-left d-inline-block">
                        {{-- ニックネーム表示 --}}
                        ＠{{ $video->user['nickname'] }}
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
