<?php

use Illuminate\Database\Seeder;
use App\Attributions;
class attributionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $attr=new Attributions;
        $attr->clientId=1;
        $attr->posteId=1;
        $attr->jour="28/10/2020";
        $attr->heure=rand(8,18);
        $attr->save();

        $attr=new Attributions;
        $attr->clientId=1;
        $attr->posteId=1;
        $attr->jour="29/10/2020";
        $attr->heure=rand(8,18);
        $attr->save();

        $attr=new Attributions;
        $attr->clientId=1;        
        $attr->jour="30/10/2020";
        $attr->posteId=1;
        $attr->heure=rand(8,18);
        $attr->save();
    }
}
