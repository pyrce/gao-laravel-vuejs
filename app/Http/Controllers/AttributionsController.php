<?php

namespace App\Http\Controllers;
use App\Attributions;
use App\Clients;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AttributionsController extends BaseController
{
    //
   
    public function index(Request $request){
        $jour='';
        if($request->get("date")){
$date= $request->get("date");
$temp=explode("-",$date);
$jour=$temp[2]."/".$temp[1]."/".$temp[0];
        }
        $query= Attributions::join('clients','attributions.clientId',"=","clients.id")
        ->join("postes","attributions.posteId","=","postes.id")
        ->where("jour","LIKE",'%'.$jour.'%')->get();
      //  dd($query->toSql(), $query->getBindings());
      return $query;
    }
    public function store(Request $request){
      $poste= Attributions::create($request->all());
      return $poste;
    }
}
