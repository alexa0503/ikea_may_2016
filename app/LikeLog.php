<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeLog extends Model
{

    public $timestamps = false;
    public function info()
    {
        return $this->belongsTo('App\Info');
    }
}
