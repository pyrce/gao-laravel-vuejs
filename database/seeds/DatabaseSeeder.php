<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(postesSeeder::class);
        $this->call(clientsSeeder::class);
        $this->call(attributionsSeeder::class);
    }
}
