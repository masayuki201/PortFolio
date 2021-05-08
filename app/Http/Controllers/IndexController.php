<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Video;

class IndexController extends Controller
{
    //みんなの動画表示
    public function index()
    {
        $users = Video::all();
    // index.blade.phpを表示させる
        return view('index', ['users' => $users,]);
    }
}
