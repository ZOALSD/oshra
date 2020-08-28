<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'admin_id' => 1,
        'blog_title_ar' => $faker->name,
        'blog_title_en' => $faker->name,
        'blog_ar' => $faker->paragraph,
        'blog_en' => $faker->paragraph,
        'blog_url_video' =>$faker->url,
        'blog_write_ar' => $faker->url,
        'blog_write_en' =>$faker->url,
        'blog_key' => $faker->text,
    ];
});
