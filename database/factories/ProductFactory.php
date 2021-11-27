<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $facker->text(200),
        'price' => $faker->numberBetween(800,10000),
        
    ];
});
