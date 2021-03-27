@extends('layout.app')

@section('title','ちるび/動画登録ページ')


@section('content')
<div class="container">
    <div class="my-5">
        <h4>動画登録</h4>
    </div>
    <div class="video row">
        {!! Form::open(['route'=>'videos.store']) !!}
        <div class="form-group">
            {!! Form::label('url','①登録したいYouTube動画のURLを入力して下さい',['class'=>'text-success']) !!}
            <br>例）登録したいYouTube動画のURLが <span> https://www.youtube.com/watch?v=PkDfrVdCwCs なら</span>
            <div>  "v="の直後にある "<span class="text-success">”PkDfrVdCwCs”</span>" を入力</div>
            {!! Form::text('url',null,['class'=>'form-control']) !!}

            {!! Form::label('comment','②登録する動画のオススメの対象を選択して下さい（1対象のみ）',['class'=> 'text-success']) !!}

            {{-- チェックボックス　--}}
            <div class="form-check-inline">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="target_id" value="1"> <label>🐥 年少々</label>
                </div>
            </div>

            <div class="form-check-inline">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="target_id" value="2"> <label>🐰 年少</label>
                </div>
            </div>

            <div class="form-check-inline">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="target_id" value="3"> <label>🐼 年中</label>
                </div>
            </div>

            <div class="form-check-inline">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="target_id" value="4"> <label>🐘 年長</label>
                </div>
            </div>

            {!! Form::submit('登録',['class'=> 'button btn btn-primary mt-5 mb-5']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>

{{-- 登録済み動画へ --}}
@include('videos', ['videos' => $videos])

@endsection
