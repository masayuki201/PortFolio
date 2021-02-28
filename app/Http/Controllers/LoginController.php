<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:128', 'unique:m_users'],
            'password' => ['required', 'string', 'max:64', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return MUser::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showLoginForm()
    {
        return view('login');
    }

}
