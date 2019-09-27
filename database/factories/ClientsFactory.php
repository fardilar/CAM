<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Client::class, function (Faker\Generator $faker) {
  

    return [
        'Cedula_Nit' => rand(100000,999999),
        'Nombre' => $faker->name,
        'Observaciones' => "Carrera ".rand(10,120). " N.".rand(10,120)."-".rand(10,120),
        'Direccion' => "Cliente CAM",
        'Telefono' => rand(600000,799999),
        'email' => $faker->unique()->safeEmail,
       
    ];
});
