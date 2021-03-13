<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Video;
use App\Pickup;


class PickupController extends Controller
{
    //ピックアップ
    public function index()
    {
        $pickup = Video::inRandomOrder()->take(5)->get();

        return view('pickup',['pickup' => $pickup,]);
    }


}
