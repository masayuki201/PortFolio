<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
     // videos_tableの内容設定
    protected $fillable = ['user_id','url','target_id',];

    // Videoモデルが、Userモデルに所属している
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Videoモデルが、Targetモデルに所属している
    public function target()
    {
        return $this->belongsTo(Target::class);
    }

    public $timestamps = false;
}
