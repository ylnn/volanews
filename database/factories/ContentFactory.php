<?php

use Faker\Generator as Faker;
use App\Content;

$factory->define(Content::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->sentence),
        'status' => 1,
        'body' => ucfirst($faker->paragraph(3))
    ];
});
