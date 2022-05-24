@extends('layout.app')

@section('title','ちるび/マイページ')

@section('content')
<div class="container  my-5">
    <div class="text-center mb-5">
        <h4>マイページ</h4>
    </div>

    <div class="form-group row">
        <label class="col-sm-6 col-form-label text-sm-right">ユーザーID &emsp;&emsp;&emsp;:</label>
        <label class="col-sm-6 col-form-label text-sm-left">{{Auth::user()->id}}</label>
    </div>

    <div class="form-group row">
        <label class="col-sm-6 col-form-label text-sm-right">ニックネーム&emsp;&emsp;:</label>
        <label class="col-sm-6 col-form-label text-sm-left">{{Auth::user()->nickname}}</label>
    </div>

    <div class="form-group row">
        <label class="col-sm-6 col-form-label text-sm-right">メールアドレス &emsp;:</label>
        <label class="col-sm-6 col-form-label text-sm-left">{{Auth::user()->email}}</label>
    </div>

    <div class="text-center col-auto px-3 my-5">
        <a href="/user/{{Auth::id()}}/edit" class="btn btn-ryb col-auto">修正/退会</a>
    </div>
</div>
@endsection
