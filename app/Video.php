<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['user_id','url','target_id','target_grade'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
