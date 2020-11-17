<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attributions extends Model
{
    //
    protected $fillable = [
        'clientId','posteId','heure','jour'
       ];
    public $timestamps = false;
    public function clients(){
        return $this->belongsTo('App\Clients','clientId');
    } 
    public function postes(){
        return $this->belongsTo('App\Postes','posteId');
    } 
}
