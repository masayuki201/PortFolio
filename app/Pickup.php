<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{

    protected $fillable = [
        'id',
        'nickname',
        'email',
        'password',
    ];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }


}
