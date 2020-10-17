Orde<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'RequiredDate' =>$faker->dateTime,
        'ShippingDate' =>$faker->dateTime,
        'Status'=>$faker->randomNumber(),
        'Comments' =>$faker->word
    ];
});
