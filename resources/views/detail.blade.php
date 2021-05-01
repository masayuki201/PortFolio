@extends('layout.app')

@section('title','ちるび/マイページ')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h4>マイページ</h4>
    </div>

    <div class="row mb-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-8 text-left mb-3">
            ユーザーID &emsp;&emsp;&emsp;:&emsp;&emsp;{{Auth::user()->id}}
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-8 text-left mb-3">
            ニックネーム &emsp;&emsp;:&emsp;&emsp;{{Auth::user()->nickname}}
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-8 text-left mb-3">
            メールアドレス &emsp;:&emsp;&emsp;{{Auth::user()->email}}
        </div>
    </div>

    <div class="text-center col-auto px-3 my-5">
        <a href="/user/{{Auth::id()}}/edit" class="btn btn-ryb col-auto">修正/退会</a>
    </div>
</div>
@endsection
