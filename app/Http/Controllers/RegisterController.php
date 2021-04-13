<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    // 新規登録後は動画登録画面へ進む
    protected $redirectTo = '/videos/create';

    // この処理を行うのは必ずguestでなければならない
    public function __construct()
    {
        $this->middleware('guest');
    }

    // 新規登録時のバリデーション
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nickname' => ['required', 'string', 'max:16'],
            'email' => ['required', 'string', 'email', 'max:128', 'unique:users'],
            'password' => ['required', 'string', 'max:64', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // Register.blade.phpを表示させる
    public function showRegistrationForm()
    {
        return view('register');
    }
}
