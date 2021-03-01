<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('top');
});

//新規登録
Route::get('signup', 'RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'RegisterController@register')->name('signup.post');

//ログイン
Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login')->name('login.post');
Route::get('/logout', 'LoginController@logout')->name('logout');

//ログイン中
Route::group(['middleware' => 'auth'], function () {
    //ユーザ情報表示
    Route::get('/user/{id}', 'Auth\UserController@show')->name('user.show');
    //ユーザ情報修正
    Route::get('/user/{id}/edit', 'Auth\UserController@edit')->name('user.edit');
});


