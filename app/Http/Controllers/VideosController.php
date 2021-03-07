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
}
