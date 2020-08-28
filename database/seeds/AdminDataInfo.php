<?php

use Illuminate\Database\Seeder;

class AdminDataInfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return \App\Admin::create([
            'name'     => 'admin',
            'email'    => 'A7med2soft@gmail.com',
            'password' => bcrypt(123456),
        ]);
      //  factory('App\Admin', 10)->create();

    }
}
