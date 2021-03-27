<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    protected $fillable = ['target_grade'];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public $timestamps = false;

}
