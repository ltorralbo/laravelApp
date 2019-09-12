<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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
        'last_name' => $faker->name,
        'rut' => rand(14550505, 1823454323),
        'yy' => rand(1976, 1999),
        'mm' => rand(1, 12),
        'dd' => rand(1, 30),
        'dd' => rand(1, 30),
        'fika15' => rand(1, 2),
        'fika10' => rand(1, 2),
        'points' => rand(0, 83232),
        'region' => $faker->randomElement(['Valparaíso', 'Región metropolitana']),
        'city' => $faker->randomElement(['Valparaíso', 'Viña del mar', 'quilpué']),
        'ocupation' => $faker->randomElement(['estudiante', 'trabajador']),
        'level' => $faker->randomElement(['basica', 'plata', 'oro']),
        'fav_drink' => $faker->randomElement(['Cubano', 'Americano', 'Capuccino', 'Mocacchino']),
        'fav_cake' => $faker->randomElement(['Tarta manjar', 'la bombe', 'Chessecake Maracuyá', 'Chessecake Frambuesa', 'Eclair']),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
