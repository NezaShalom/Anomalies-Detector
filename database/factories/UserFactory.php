<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'mobile_number' => $this->faker->phoneNumber,
        'address' => $this->faker->address,
        'image' => $this->faker->imageUrl('60', '60'),
        'role' => $this->faker->randomElement(['admin', 'customer', 'employee', 'supervisor']),
        'status' => $this->faker->randomElement(['active', 'inactive']),
        'marriage' => $this->faker->randomElement(['married', 'not_married']),
        'life' => $this->faker->randomElement(['alive', 'not_alive']),
        'age' => $faker->age,
        'department_id' => $faker->department_ids,
        'remember_token' => Str::random(10),
    ];
});
