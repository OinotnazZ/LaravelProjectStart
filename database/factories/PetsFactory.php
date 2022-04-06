<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pets;
use Faker\Generator as Faker;

$factory->define(Pets::class, function (Faker $faker) {
    return [
        'name'           => $faker->name,
        'color'          => $faker->colorName,
        'birthDate'      => $faker->date(),
        'people_id'      => rand(1, 10)
    ];
});
