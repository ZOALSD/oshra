<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Causes;
use Faker\Generator as Faker;

$factory->define(Causes::class, function (Faker $faker) {
    return [
        
'admin_id' => 1,
'causes_name_ar'=> $faker->title,
'causes_name_en'=> $faker->title,
'causes_dis_ar'=> $faker->paragraph,
'causes_dis_en'=> $faker->paragraph,
'causes_date'=> $faker->date,
'causes_img'=> $faker->image,
'causes_youtube_link'=> $faker->title,
'causes_facebook_link'=> $faker->title,
'causes_twitter_link'=> $faker->title,
'causes_instgram_link'=> $faker->title,
'causes_plase'=> $faker->name,
'status'=> 'done',
'key_word'=> $faker->name, 

    ];
});
