@extends('layout.app')

@section('title','ちるび/動画登録ページ')


@section('content')

<div class="mt-5">
    <h4>動画登録</h4>
</div>
{!! Form::open(['route'=>'videos.store']) !!}
    <div class="form-group mt-5">
        {!! Form::label('url','①登録したいYouTube動画のURLを入力して下さい',['class'=>'text-success']) !!}
            <br>例）登録したいYouTube動画のURLが <span> https://www.youtube.com/watch?v=PkDfrVdCwCs なら</span>
            <div>  "v="の直後にある "<span class="text-success">”PkDfrVdCwCs”</span>" を入力</div>
        {!! Form::text('url',null,['class'=>'form-control']) !!}

        {!! Form::label('comment','登録する動画のオススメの対象を選択して下さい（複数選択可）',['class'=> 'mt-3']) !!}

        <div class="form-check-inline">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="custom-check1" checked>
                <label class="custom-control-label" for="custom-check1">年少々</label>
            </div>
        </div>
        <div class="form-check-inline">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="custom-check2">
                <label class="custom-control-label" for="custom-check2">年少</label>
            </div>
        </div>
        <div class="form-check-inline">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="custom-check3">
                <label class="custom-control-label" for="custom-check3">年中</label>
            </div>
        </div>
        <div class="form-check-inline">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="custom-check3">
                <label class="custom-control-label" for="custom-check3">年長</label>
            </div>
        </div>


        {!! Form::submit('登録',['class'=> 'button btn btn-primary mt-5 mb-5']) !!}

    </div>
{!! Form::close() !!}


<div class="mt-5">
    <h4>登録済み動画</h4>
</div>

@include('videos.videos', ['videos' => $videos])

@endsection
