<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->email,
        'birthDate'      => $faker->date(),
        'address_id'     => rand(1, 150)
    ];
});
