<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'admin_id' => 1,
        'member_name_ar' => $faker->name,
        'member_name_en' =>$faker->name,
        'member_about_ar' =>$faker->paragraph,
        'member_about_en' =>$faker->paragraph,
        'member_face' =>$faker->url,
        'member_twitter' =>$faker->url,
        'member_instgram' =>$faker->url,
    ];
});
