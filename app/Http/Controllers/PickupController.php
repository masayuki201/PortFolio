<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Video;
use App\Pickup;

class PickupController extends Controller
{
    //ピックアップ
    public function index()
    {
        // DBよりランダムに9個のビデオを選定し、表示する
        $pickup = Video::inRandomOrder()->take(9)->get();

        // pickup.blade.phpを表示させる
        return view('pickup',['pickup' => $pickup,]);
    }
}
