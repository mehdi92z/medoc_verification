<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        //
            'nom' => $faker->firstName(),
            'prenom' => $faker->firstName(),
            'telephone' => $faker->phoneNumber,
            'adresse' => $faker->address,
            'remarque' => $faker->word(4),
            'maladie' => $faker->word(),
            'fidel'=>$faker->boolean()
    ];
});
