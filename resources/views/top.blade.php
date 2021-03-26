{{-- 仮のtop画面--}}

@extends('layout.app')

@section('title','ちるび/topページ')

@section('content')

{{-- "junbotron" 背景画を入れる--}}
<div class="jumbotron jumbotron-extend">
    <div class="container-fluid jumbotron-container">
        <div class="text-left text-light">
            <h1>さぁ みんなで作っていこう<br>子供向けの動画を共有しよう</h1>
        </div>
    </div>
</div>

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
            <div class="navbar-nav ml-auto">
                <div class="nav-item">
                    {!! link_to_route('signup', '新規登録', [], ['class' => 'btn btn-warning btn-lg col-auto']) !!}
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 text-center my-5">
            <div class="navbar-nav ml-auto">
                <div class="nav-item">
                    {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-primary btn-lg col-auto']) !!}
                </div>
            </div>
        </div>
    </div>
    @endguest
</div>

{{-- ログインした場合は　topに来れないようにする--}}

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(222, 238, 255)">
    <div class="collapse navbar-collapse">
        <div class="navbar-nav nav-item mx-2">
            <a class="nav-link text-dark" href="#"><h5>ピックアップ</h5></a>
        </div>
    </div>
    <div class="navbar-nav ml-auto">
        <div class="nav-item">
            <a href="#">もっとみる</a>
        </div>
    </div>
</nav>
{{-- みんなの動画の一部を表示させる--}}
みんなの動画の一部を表示させるみんなの動画の一部を表示させるみんなの動画の一部を表示させるみんなの動画の一部を表示させるみんなの動画の一部を表示させるみんなの動画の一部を表示させる

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(222, 238, 255)">
    <div class="collapse navbar-collapse">
        <div class="navbar-nav nav-item mx-2">
            <a class="nav-link text-dark" href="#"><h5>ランキング</h5></a>
        </div>
    </div>
    <div class="navbar-nav ml-auto">
        <div class="nav-item">
            <a href="#">もっとみる</a>
        </div>
    </div>
</nav>
{{-- ランキングの一部を表示させる--}}
ランキングの一部を表示させるランキングの一部を表示させるランキングの一部を表示させるランキングの一部を表示させるランキングの一部を表示させるランキングの一部を表示させるランキングの一部を表示させる

@endsection
