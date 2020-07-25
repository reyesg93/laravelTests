<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    
    return [
       'name' => $faker->bothify('Product ##??'),
       'price' => $faker->numberBetween($min = 30, $max = 400),
       'description' =>  $faker->text($maxNbChars = 200),
    ];
});