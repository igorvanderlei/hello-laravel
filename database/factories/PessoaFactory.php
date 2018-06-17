<?php

use Faker\Generator as Faker;

$factory->define(teste\Pessoa::class, function (Faker $faker) {
    return [
      'nome' => $faker->firstName,
      'sobrenome' => $faker->lastName,
      'telefone' => $faker->phoneNumber,
      'idade' => $faker->numberBetween(18, 65)
    ];
});