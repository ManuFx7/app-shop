<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;

$factory->define(Category::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => ucfirst($faker->word),
        'description' => $faker->sentence(10)
    ];
});
