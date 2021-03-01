@extends('layout.app')

@section('title','ちるび/マイページ')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h4>マイページ</h4>
    </div>
    <div class="row mb-3">
        <div class="col-sm-5 col-5 text-right">ユーザーID</div>
        <div class="col-sm-5 col-5 ml-auto ">{{Auth::user()->id}}</div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-5 col-5 text-right">ニックネーム</div>
        <div class="col-sm-5 col-5 ml-auto">{{Auth::user()->nickname}}</div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-5 col-5 text-right">メールアドレス</div>
        <div class="col-sm-5 col-5 ml-auto">{{Auth::user()->email}}</div>
    </div>
    <div class="text-center col-auto px-3 my-3">
        <a href="/user/{{Auth::id()}}/edit" class="btn btn-primary col-auto">修正/退会</a>
    </div>
</div>
@endsection
