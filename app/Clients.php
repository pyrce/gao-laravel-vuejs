<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    //
    public $timestamps = false;
    function attribution(){
        return $this->hasMany('App\Attributions');
    }
}
