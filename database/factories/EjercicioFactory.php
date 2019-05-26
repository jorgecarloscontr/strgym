<?php

use Faker\Generator as Faker;

$factory->define(App\Ejercicio::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'grupo' => $faker->randomElement($array= array("cuadriceps","pantorrila","gluteo","hombro","espalda","tricep","pectoral")),
        'descripcion' => $faker->sentence($nbWords = 4, $variableNbWords = true),
    ];
});
