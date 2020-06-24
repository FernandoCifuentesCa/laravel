<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\posts;
use Faker\Generator as Faker;

$factory->define(posts::class, function (Faker $faker) {
    return [
        //
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
