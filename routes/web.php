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

//みんなの動画
Route::get('/index', 'IndexController@index')->name('index.index');
// 動画検索
Route::get('/index/{id}', 'IndexController@show');

//ピックアアップ
Route::get('/pickup', 'PickupController@index')->name('pickup.index');

//ランキング
Route::get('/ranking', 'RankingController@index')->name('ranking.index');

//ログイン中　マイページ関連
Route::group(['middleware' => 'auth'], function () {
    //マイページ
    Route::get('/user/{id}', 'UsersController@show')->name('user.show');
    //登録情報修正
    Route::get('/user/{id}/edit', 'UsersController@edit')->name('user.edit');
    //登録情報更新
    Route::post('/user/{id}', 'UsersController@update')->name('user.update');
    //登録情報削除
    Route::delete('/user/{id}/delete', 'UsersController@destroy')->name('user.destroy');
});

//ログイン中 動画登録関連
Route::group(['middleware' => 'auth'], function () {
    //動画登録画面
    Route::get('/videos/create', 'VideosController@create')->name('videos.create');
    //動画登録
    Route::post('/videos', 'VideosController@store')->name('videos.store');
    //動画削除
    Route::delete('/videos/{id}delete', 'VideosController@destroy')->name('videos.destroy');
});

