@extends('layout.app')

@section('title','ちるび/ログインページ')

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h4>ログイン</h4>
    </div>

    <div class="col-sm-6 offset-sm-3 text-success">
        <h6>※ログインすると、動画登録ができるよ♪</h6>
    </div>

    {!! Form::open(['route' => 'login.post']) !!}
    <div class="col-sm-6 offset-sm-3">
        <div class="form-group">
            {!! Form::label('email', 'メールアドレス') !!}
            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-6 offset-sm-3">
        <div class="form-group">
            {!! Form::label('password', 'パスワード') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="text-center col-sm-12">
        {!! Form::submit('ログイン', ['class' => 'btn btn-primary my-5']) !!}
    </div>
    <div class="text-center col-sm-12 mb-3">
        {!! link_to_route('signup', '➜まだ登録がお済みでない方はこちら') !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
