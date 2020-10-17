Cus<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'salesRepEmployeeNum' => $faker->randomNumber(),
        'Name' => $faker->name,
        'LastName' => $faker->firstName,
        'FirstName' => $faker->lastName,
        'Phone' => $faker->phoneNumber,
        'Address1' => $faker->address,
        'Address2' => $faker->address,
        'City' => $faker->city,
        'State' => $faker->word,
        'PostalCode' => $faker->randomNumber(),
        'Country' => $faker->country,
        'CreditLimit' => $faker->randomNumber()
    ];
});
