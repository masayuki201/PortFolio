<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Video;
use Illuminate\Support\Facades\Auth;


class VideosController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        $videos = $user->orderBy('id', 'desc')->paginate(9);

        $data=[
            'user' => $user,
            'videos' => $videos,
        ];
        return view('create', $data);
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

    //動画削除アクション
    public function destroy($id)
    {
        $video = Video::find($id);

        if (\Auth::id() == $video->user_id) {
            $video->delete();
        }

        return back();
    }
}
