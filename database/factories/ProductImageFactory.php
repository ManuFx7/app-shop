<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductImage;

$factory->define(ProductImage::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'image' => $faker->imageUrl(250,250),
        'product_id' => $faker->numberBetween(1,10)
    ];
});
