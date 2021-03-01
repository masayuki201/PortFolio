@extends('layout.app')

@section('title','ちるび/マイページ')

@section('content')
<div class="container mt-5">
    <h3 class="text-center py-5">マイページ</h3>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">ユーザーID</div>
        <div class="col-sm-4 col-5">{{Auth::user()->id}}</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">ニックネーム</div>
        <div class="col-sm-4 col-5">{{Auth::user()->nickname}}</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">メールアドレス</div>
        <div class="col-sm-4 col-5">{{Auth::user()->email}}</div>
    </div>
    <div class="text-center col-auto px-3 my-3">
        <a href="/user/{{Auth::id()}}/edit" class="btn btn-primary col-auto">修正/退会する</a>
    </div>
</div>
@endsection
