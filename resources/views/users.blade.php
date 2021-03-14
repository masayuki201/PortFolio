@extends('layout.app')

@section('title','ちるび/みんなの動画ページ')

@section('content')
<div class="container">
    <div class="mt-5 mb-5">
        <h4>動画検索</h4>
    </div>

<div class="form-check-inline">
    <div class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" id="custom-check1">
        <label class="custom-control-label" for="custom-check1">🐥 年少々</label>
    </div>
</div>
<div class="form-check-inline">
    <div class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" id="custom-check2">
        <label class="custom-control-label" for="custom-check2">🐰 年少</label>
    </div>
</div>
<div class="form-check-inline">
    <div class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" id="custom-check3">
        <label class="custom-control-label" for="custom-check3">🐼 年中</label>
    </div>
</div>
<div class="form-check-inline">
    <div class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" id="custom-check4">
        <label class="custom-control-label" for="custom-check4">🐘 年長</label>
    </div>
</div>
{!! Form::submit('検索',['class'=> 'button btn btn-primary mt-5 mb-5']) !!}


    <div class="mt-5 mb-5">
        <h4>みんなの動画</h4>
    </div>
    <div class="video row mt-5 text-center">
        @foreach ($users as $key => $user)

        @php

        //$video=$user->videos->last();
        //$video=$user->videos;
        $video=$user;


        @endphp
            @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
                </div>
                <div class="row text-center mt-3">
            @endif
                <div class="col-lg-4 mb-5">
                    <div class="video text-left d-inline-block">
                        ＠{{ $video->user_id}}
                        <div>
                            @if($video)
                                <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$video->url }}?controls=1&loop=1&playlist={{ $video->url }}" frameborder="0"></iframe>
                            @else
                                <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" frameborder="0"></iframe>
                            @endif
                        </div>
                        <p>
                            @if(isset($video->target_id))
                                    {{ $video->target_id }}
                            @endif
                        </p>
                    </div>
                </div>
        @endforeach
    </div>

</div>

@endsection
