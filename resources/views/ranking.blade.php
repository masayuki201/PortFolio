@extends('layout.app')

@section('title','ちるび/ランキングページ')

@section('content')
<div class="container">
    <div class="mt-5 mb-5">
        <h4>再生回数ランキング</h4>
    </div>

    <div class="video row mt-5 text-center">
        @foreach ($arrayVideo as $key => $user)

        @php
        $video=$user;
        @endphp

            @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
            @endif
                <div class="col-lg-4 mb-5">
                    <div class="video text-left d-inline-block">
                        {{-- ニックネーム表示 --}}
                        ＠{{ $video->user->nickname }}
                        <div>
                            @if($video)
                            <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$video->url }}?controls=1&loop=1&playlist={{ $video->url }}" frameborder="0"></iframe>
                            @else
                            <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" frameborder="0"></iframe>
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
