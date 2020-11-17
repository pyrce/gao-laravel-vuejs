<?php

use Illuminate\Database\Seeder;
use App\Clients;
class clientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $client=new Clients;
        $client->nomClient="nom 1";
        $client->prenomClient="prenom 1";
        $client->save();

        
        $client=new Clients;
        $client->nomClient="nom 2";
        $client->prenomClient="prenom 2";
        $client->save();

        $client=new Clients;
        $client->nomClient="nom 3";
        $client->prenomClient="prenom 3";
        $client->save();

        $client=new Clients;
        $client->nomClient="nom 4";
        $client->prenomClient="prenom 4";
        $client->save();

        $client=new Clients;
        $client->nomClient="nom 5";
        $client->prenomClient="prenom 5";
        $client->save();


        }
}
