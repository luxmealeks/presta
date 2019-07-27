<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\PrestatairesActivite::class, function (Faker $faker) {
    return [
        'activites_id' => function () {
            return factory(App\Models\Activite::class)->create()->id;
        },
        'prestataires_id' => function () {
            return factory(App\Models\Prestataire::class)->create()->id;
        },
    ];
});
