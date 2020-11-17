<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use App\Postes;
use App\Attributions;
class GestionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function liste(){
        return view("index");
    }

    public function index(){
        
       $postes=Postes::get();
       $attr=Attributions::get();
   
        return $postes;
    }

    public function store(Request $request){

       $poste= Postes::create($request->all());
        return $poste;
    
    }

}