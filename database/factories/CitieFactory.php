<?php

use Faker\Generator as Faker;
use App\Citie;

$factory->define(App\Citie::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
