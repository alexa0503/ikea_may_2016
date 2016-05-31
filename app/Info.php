<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //
    public $timestamps = false;
    public function logs()
    {
        return $this->hasMany('App\UserLog');
    }
}
