<?php

use Illuminate\Database\Seeder;

class OurMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Model\Member',20)->create();
    }
}
