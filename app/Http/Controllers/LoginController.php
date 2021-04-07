<?php

namespace App\Http\Controllers;

use App\MUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // ログイン後は、動画登録画面へ進む
    protected $redirectTo = '/videos/create';

    // この処理を行うのは必ずguestでなければならない（logoutを除いて）
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // ログイン時のバリデーション
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

    // login.blade.phpを表示させる
    public function showLoginForm()
    {
        return view('login');
    }
}
