<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Validation\Rule;
use App\User;


class UsersController extends Controller
{
    //みんなの動画
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(9);

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
