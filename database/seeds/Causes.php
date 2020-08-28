<?php

use Illuminate\Database\Seeder;

class Causes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Model\Causes', 20)->create();
    }
}
