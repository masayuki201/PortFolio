<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(9);

        return view('list', [
            'users' => $users,
        ]);
    }
}


