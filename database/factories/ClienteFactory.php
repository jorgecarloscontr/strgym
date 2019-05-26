<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'sexo' => $faker->randomElement($array= array('m','f')),
        'nacimiento'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'telefono' =>$faker->e164PhoneNumber,
    ];
});
