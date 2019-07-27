<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\SecteursActivitesPrestataire::class, function (Faker $faker) {
    return [
        'prestataires_id' => function () {
            return factory(App\Models\Prestataire::class)->create()->id;
        },
        'secteursActivites_id' => function () {
            return factory(App\Models\Activite::class)->create()->id;
        },
    ];
});
