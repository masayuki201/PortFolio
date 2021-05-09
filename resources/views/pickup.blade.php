@extends('layout.app')

@section('title','ちるび/ピックアップページ')

@section('content')
<div class="container">
    <div class="my-5">
        <h4>ピックアップ動画</h4>
    </div>
    <div class="row mt-5 text-center">
        @foreach ($pickup as $key => $user)
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
                            {{-- 動画を表示 --}}
                            @if($video)
                                <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$video->url }}?controls=1&loop=1&playlist={{ $video->url }}" frameborder="0"></iframe>
                            @else
                                <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" frameborder="0"></iframe>
                            @endif
                        </div>
                        <p>
                            {{-- 対象学年表示 --}}
                            おすすめ：{{ $video->target['target_grade'] }}さん
                        </p>
                    </div>
                </div>
        @endforeach
    </div>
</div>
@endsection
