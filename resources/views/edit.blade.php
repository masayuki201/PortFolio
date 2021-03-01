@extends('layout.app')

@section('title','ちるび/登録情報修正ページ')

@section('content')
<div class="container">
	<h3 class="text-center py-5">登録情報修正</h3>
    <form action="{{ route('user.update', [Auth::user()->id]) }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{Auth::user()->id}}">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-center">ニックネーム</label>
            <input type="text" name="nickname" value="{{ Auth::user()->nickname }}" class="col-sm-3 col-8">
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-center">メールアドレス</label>
            <input type="text" name="email" value="{{ Auth::user()->email }}" class="col-sm-3 col-8">
        </div>
        <div class="d-flex justify-content-around py-5 col-sm-8 col-auto container">
            <input class="btn btn-primary" type="submit" value="修正">
    </form>

    <form action="{{ route('user.destroy', [Auth::user()->id]) }}" method="post">
        @csrf
        @method('DELETE')
            <input class="btn btn-danger" type="submit" value="退会">
        </div>
    </form>
</div>
@endsection
