<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Video;


class VideosController extends Controller
{
    public function create()
    {
        $user = \Auth::user();
        $videos = $user->videos()->orderBy('id', 'desc')->paginate(9);

        $data=[
            'user' => $user,
            'videos' => $videos,
        ];
        return view('videos.create', $data);
    }

    //動画登録フォームからの動画登録アクション
    public function store(Request $request)
    {

        $this->validate($request,[
            'url' => 'required|max:11',
            'target_id' => 'max:10',
        ]);

        $request->user()->videos()->create([
            'url' => $request->url,
            'target_id' => $request->target_id,
        ]);

        return back();
    }
}
