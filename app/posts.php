<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    public function comments()
    {
        return $this->hasMany('App\comments');
    }
}
