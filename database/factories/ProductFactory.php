<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'code'=>$faker->randomNumber(),
        'Name'=>$faker->name,
        'Scale'=>$faker->randomNumber(),
        'vendor'=>$faker->word,
        'PdtDescription'=>$faker->word,
        'QtylnStock'=>$faker->randomNumber(),
        'BuyPrice'=>$faker->randomNumber(),
        'MSRP'=>$faker->word
    ];
});
