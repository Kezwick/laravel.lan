<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    $title = rtrim($faker->realText($faker->numberBetween(15,45)),".");
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'image' => $faker->imageUrl(400, 200),
        'intro' => $faker->realText(rand(150, 300)),
        'body' => $faker->text(rand(300, 500)),
    ];
});
