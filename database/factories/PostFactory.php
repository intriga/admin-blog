<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id' => rand(1, 10),
        'category_id' => rand(1, 10),
        'title' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->text(200),
        'content' => $faker->text(500),
        'status' => $faker->randomElement(['PUBLISHED', 'DRAFT']),
        'file' => $faker->imageUrl($width = 1200, $height = 400),
    ];
});
