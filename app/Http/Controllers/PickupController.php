<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Video;

class PickupController extends Controller
{
    public function index()
    {
        DB::table('videos')->inRandomOrder()->take(4)->get();


        return view('pickup');
    }

}
