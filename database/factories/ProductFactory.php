<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;

$factory->define(Product::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->word(3),
        'description' => $faker->sentence(15),
        'long_description' => $faker->text,
        'price' => $faker->randomFloat(2,5,150),
        'category_id' => $faker->numberBetween(1,5)
    ];
});
