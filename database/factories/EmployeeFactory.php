<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'City' =>$faker->city,
        'reportsTo' => $faker->word,
        'LastName' => $faker->lastName,
        'FirstName' => $faker->lastName,
        'Extension' => $faker->word,
        'Email' => $faker->email,
        'JobTitle' => $faker->jobTitle
    ];
});
