<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Validation\Rule;
use App\User;
use App\video;

class UsersController extends Controller
{
    //みんなの動画
    public function index()
    {
        //$users = User::orderBy('id','desc')->paginate(100);
        //$users = Video::with(users)->get;
        //$users = Video::orderBy('id', 'desc')->paginate(100);
        $users = DB::table('videos')->get();

        return view('users', ['users' => $users,]);

    }

    //マイページ
    public function show($id)
    {
        if($id == Auth::id()){
            return view('detail',[ 'id' => $id ]);
        }
        //フラシュメッセージをみんなの動画ページへ表示させる
       // return redirect('/   ')->with('flash_message', '不適切なURLです。');

    }

    //登録情報修正
    public function edit($id)
    {
        if($id == Auth::id()){
            return view('edit',[ 'id' => $id ]);
        }
        //フラシュメッセージをみんなの動画ページへ表示させる
        //return redirect('/    ')->with('flash_message', '不適切なURLです。');
    }

    //登録情報更新
    public function update(Request $request)
    {
        $request->validate([
            'nickname' => ['required', 'string', 'max:16'],
            'email' => ['required', 'string', 'email', 'max:128', Rule::unique('users')->ignore(Auth::id())],
        ]);

        //リクエストデータ受取
        $form = $request->all();
        unset($form['_token']);

        //フォームトークン削除、更新
        $auth = Auth::user();
        $auth->fill($form)->save();
        return view('detail',[ 'auth' => $auth ]);
    }

    //ユーザ情報削除
    public function destroy()
    {
        Auth::user()->delete();
        return redirect('/');
    }
}
