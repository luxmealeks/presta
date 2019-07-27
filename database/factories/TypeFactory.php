<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Type::class, function (Faker $faker) {
    return [
        'typePrestataire' => $faker->word,
        'uuid' => $faker->uuid,
    ];
});
