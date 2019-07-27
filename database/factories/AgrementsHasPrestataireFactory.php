<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\AgrementsHasPrestataire::class, function (Faker $faker) {
    return [
        'prestataires_id' => function () {
            return factory(App\Models\Prestataire::class)->create()->id;
        },
        'agrements_id' => function () {
            return factory(App\Models\Agrement::class)->create()->id;
        },
    ];
});
