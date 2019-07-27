<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Performance::class, function (Faker $faker) {
    return [
        'performance' => $faker->word,
        'uuid' => $faker->uuid,
    ];
});
