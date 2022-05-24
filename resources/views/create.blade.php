@extends('layout.app')

@section('title','ちるび/動画登録ページ')

@section('content')
<div class="container">
    <div class="my-5">
        <h4>動画登録</h4>
    </div>
    <div class="video row">
        {!! Form::open(['route'=>'videos.store']) !!}
        <div class="form-group col-md-12">
            <span class="text-success">①登録したいYouTube動画のURLを入力してね♪</span>
            <br>例）登録したいYouTube動画のURLが https://www.youtube.com/watch?v=PkDfrVdCwCs なら
            <br>"v="の直後にある<span class="text-success">PkDfrVdCwCs</span>を入力してね♪<span class="text-success">（※11ケタまでだよ）</span>
            {!! Form::text('url',null,['class'=>'form-control']) !!}
            <br>
            <br>
            <span class="text-success">②登録する動画のおすすめの対象を選択してね♪（※1対象のみ）</span>
            <br>
            {{-- ラジオボタン --}}
            <div class="form-check-inline mr-3 col-md-4">
                <label class="my-radio">
                    <input type="radio" name="target_id" value="1"> 🐥 年少々
                </label>
            </div>

            <div class="form-check-inline mr-3 col-md-4">
                <label class="my-radio">
                    <input type="radio" name="target_id" value="2"> 🐰 年少
                </label>
            </div>

            <div class="form-check-inline mr-3 col-md-4">
                <label class="my-radio">
                    <input type="radio" name="target_id" value="3" checked> 🐼 年中
                </label>
            </div>

            <div class="form-check-inline col-md-4">
                <label class="my-radio">
                    <input type="radio" name="target_id" value="4"> 🐘 年長
                </label>
            </div>

            <br>
            {!! Form::submit('登録',['class'=> 'button btn btn-ryb mt-3 mb-5 col-xs-12']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>

{{-- 登録済み動画へ --}}
@include('videos', ['videos' => $videos])
@endsection
