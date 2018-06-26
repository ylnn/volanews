<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->word),
        'status' => 1,
        'order' => 1,
    ];
});
