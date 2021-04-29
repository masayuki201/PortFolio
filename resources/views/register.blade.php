@extends('layout.app')

@section('title','ちるび/新規登録ページ')

@section('content')
    <div class="text-center">
        <div class="login_title text-left d-inline-block mt-5">
            <h4>新規登録</h4>
        </div>
    </div>

        {{-- ※注意書き表示 --}}
    <div class="col-sm-6 offset-sm-3  mt-5 text-success">
        <h6>※新規登録すると、動画登録ができるよ♪</h6>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('nickname', 'ニックネーム') !!}
                    {!! Form::text('nickname', old('nickname'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード（確認用）') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                <div class="text-center col-sm-12 my-5">
                    {!! Form::submit('新規登録', ['class' => 'btn btn-green btn-lg col-auto']) !!}
                </div>
                <div class="text-center col-sm-12 my-3">
                    {!! link_to_route('login', '➜ログインはこちらから') !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
