<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
     // videos_tableの内容設定
    protected $fillable = ['user_id','url','target_id',];

    public function user()
    {
        // Videoモデルが、Userモデルに所属している
        return $this->belongsTo(User::class);
    }

    public function target()
    {
        // Videoモデルが、Targetモデルに所属している
        return $this->belongsTo(Target::class);
    }

    public $timestamps = false;
}
