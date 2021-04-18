<?php

use Faker\Generator as Faker;
use App\State;

$factory->define(App\State::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
