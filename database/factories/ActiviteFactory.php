<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Activite::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'uuid' => $faker->uuid,
    ];
});
