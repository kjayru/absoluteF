<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function twitt(){
        return $this->belongsTo('App\Twitt','id','tw_id');
    }
}
