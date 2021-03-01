@extends('layout.app')

@section('title','ちるび/マイページ')

@section('content')
<div class="container mt-5">
    <h3 class="text-center py-5">マイページ</h3>
    <div class="row justify-content-around mb-5 h4">
        <div class="col-sm-5 col-5 text-right">ユーザーID</div>
        <div class="col-sm-5 col-5 ml-auto ">{{Auth::user()->id}}</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-5 col-5 text-right">ニックネーム</div>
        <div class="col-sm-5 col-5 ml-auto">{{Auth::user()->nickname}}</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-5 col-5 text-right">メールアドレス</div>
        <div class="col-sm-5 col-5 ml-auto">{{Auth::user()->email}}</div>
    </div>
    <div class="text-center col-auto px-3 my-3">
        <a href="/user/{{Auth::id()}}/edit" class="btn btn-primary col-auto">修正/退会</a>
    </div>
</div>
@endsection
