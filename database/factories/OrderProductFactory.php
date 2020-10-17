<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order_Product::class, function (Faker $faker) {
    return [
        'Qty'=>$faker->randomNumber(),
        'PriceEach'=>$faker->randomNumber()
    ];
});
