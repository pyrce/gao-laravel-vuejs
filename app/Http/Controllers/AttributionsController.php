<?php

namespace App\Http\Controllers;
use App\Attributions;
use App\Postes;
use App\Clients;
use App\Http\Resources\AttributionsResource;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
  
          $data = Validator::make(
              $request->input(),
              [
                  'posteId' => 'required',
                  'jour' => 'required',
                  'heure' => 'required',
                  'clientId' => '',
                  'nomClient' => '',
                  'prenomClient' => '',
              ]
          )->validate();
  
          if (isset($data['clientId']) && !empty($data['clientId'])) {
              $client = Clients::find($data['clientId']);
          } else {
              $client = $this->createClient($data['nomClient'], $data['prenomClient']);
          }
  
          $ordi = Postes::find($data['posteId']);
  
          if (isset($client) && isset($ordi)) {
  
              $attribution = new Attributions();
              $attribution->heure = $data['heure'];
              $attribution->jour = $data['jour'];
              $attribution->client()->associate($client);
              $attribution->postes()->associate($ordi);
              $attribution->save();
  
              return new AttributionsResource($attribution);
          } else {
              //TODO ThrowException panier not exist
          }
      
    }

    public function delete(Request $request,$id){
        $attribution = Attributions::where('id', $id)
        ->delete();

    return $attribution;
    }
}
