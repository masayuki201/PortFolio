<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function index()
    {
        return view('top');
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

}
