<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // users_tableの内容設定
    protected $fillable = [
        'id',
        'nickname',
        'email',
        'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    //UserモデルがVideoモデルを所有している
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;
}
