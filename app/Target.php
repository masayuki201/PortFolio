<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    // targets_tableの内容設定
    protected $fillable = ['target_grade'];

    //TargetモデルがVideoモデルを所有している
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public $timestamps = false;
}
