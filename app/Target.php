<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    // target_gradeカラムの設定
    protected $fillable = ['target_grade'];

    //TargetモデルがVideoモデルを所有している
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public $timestamps = false;
}
