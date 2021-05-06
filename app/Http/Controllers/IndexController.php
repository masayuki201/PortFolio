<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //みんなの動画表示
    public function index()
    {
        $users = Video::all();
    // Users.blade.phpを表示させる
        return view('users', ['users' => $users,]);
    }
}
