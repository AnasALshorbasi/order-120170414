<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Payment::class, function (Faker $faker) {
    return [
        'CheckNum'=>$faker->word,
        'PaymentDate'=>$faker->dateTime,
        'Amount'=>$faker->randomNumber()
    ];
});
