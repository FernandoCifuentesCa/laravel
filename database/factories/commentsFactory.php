<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\comments;
use Faker\Generator as Faker;

$factory->define(comments::class, function (Faker $faker) {
    return [
        //
        'posts_id' => $faker->randomDigit(),
        'content' =>$faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});

