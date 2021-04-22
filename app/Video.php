<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
     // videos_tableの内容設定
    protected $fillable = ['user_id','url','target_id',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function target()
    {
        return $this->belongsTo(Target::class);
    }


    public $timestamps = false;

    public function pickup()
    {
        return $this->hasMany(Pickup::class);
    }

    public function ranking()
    {
        return $this->hasMany(ranking::class);
    }



}
