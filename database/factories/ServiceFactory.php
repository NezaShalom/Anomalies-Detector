<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'title' => $this->faker->word,
        'description' => $this->faker->text,
        'price' => $this->faker->numberBetween(100, 1000),
        'status' => $this->faker->randomElement(['active', 'inactive']),
    ];
});
