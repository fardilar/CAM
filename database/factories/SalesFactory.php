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
$factory->define(App\Sale::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'client_id' => rand(1,10),
        'services_id' => rand(1,6),
        'fecha_venta' => '20190917',
        'fecha_pago' => '20190917',
        'nota_cobro' => 'Efectivo', 
    ];
});
