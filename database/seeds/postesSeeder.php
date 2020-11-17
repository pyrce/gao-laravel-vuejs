<?php

use Illuminate\Database\Seeder;
use App\postes;
class postesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $poste=new postes;
        $poste->nomPoste="poste1";
        $poste->save();

        $poste=new postes;
        $poste->nomPoste="poste2";
        $poste->save();

        $poste=new postes;
        $poste->nomPoste="poste3";
        $poste->save();

        $poste=new postes;
        $poste->nomPoste="poste4";
        $poste->save();

        $poste=new postes;
        $poste->nomPoste="poste5";
        $poste->save();
    }
}
