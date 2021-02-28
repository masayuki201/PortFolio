{{-- 仮のtop画面--}}

@extends('layout.app')

@section('title','ちるび/topページ')

@section('content')

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(30, 141, 225)">
    <div class="collapse navbar-collapse">
    <ul class="navbar-nav">
        <li class="nav-item mx-2">
            <a class="nav-link text-light" href="#">ピックアアップ</a>
        </li>
        <li class="nav-item mx-4">
            <a class="nav-link text-light" href="#">ランキング</a>
        </li>
        <li class="nav-item mx-4">
            <a class="nav-link text-light" href="#">みんなの動画</a>
        </li>
        <li class="nav-item mx-4">
            <a class="nav-link text-light" href="#">ヘルプ</a>
        </li>
    </ul>
    </div>
</nav>

<div class="container">
    {{-- ログインしていない場合 --}}
    @guest
    <div class="row">
        <div class="col-xs-12 col-md-6 text-center my-5">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-danger col-auto" href="#">新規登録</a>
                </li>
            </ul>
        </div>

        <div class="col-xs-12 col-md-6 text-center my-5">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-primary col-auto" href="#">ログイン</a>
                </li>
            </ul>
        </div>
    </div>
    @endguest


    {{-- ログインしている場合 --}}
    @auth
    <div class="row">
        <div class="col-xs-12 col-md-6 text-center mt-5">
            <h5>まだアカウントを<br>お持ちでない方はこちら</h5>
            <div class="col-xs-12 col-md-12 text-center mt-4">
                <button type="button" class="btn btn-primary btn-md">新規登録</button>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 text-center mt-5">
            <h5>すでにアカウントを<br>お持ちの方はこちら</h5>
            <div class="col-xs-12 col-md-12 text-center mt-4">
                <button type="button" class="btn btn-primary btn-md">ログイン</button>
            </div>
        </div>
    </div>
    @endauth

</div>
@endsection
