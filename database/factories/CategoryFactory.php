<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->realText($faker->numberBetween(15,45)),
        'image' => $faker->imageUrl(400, 200),
        'description' => $faker->realText(200, 2)
    ];
});
