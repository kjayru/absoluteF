<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twitt extends Model
{
    public function videos(){
        return $this->hasMany('App\Video','tw_id','id');
    }
}
