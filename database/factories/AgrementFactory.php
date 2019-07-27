<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Agrement::class, function (Faker $faker) {
    return [
        'reference' => $faker->word,
        'classe' => $faker->word,
        'uuid' => $faker->uuid,
    ];
});
