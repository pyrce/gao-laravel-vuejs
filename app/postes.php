<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postes extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
     'nom'
    ];
    function attribution(){
        return $this->hasMany('App\Attributions');
    }
}
