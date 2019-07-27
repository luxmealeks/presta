<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Prestataire::class, function (Faker $faker) {
    return [
        'ninea' => $faker->word,
        'bp' => $faker->randomNumber(),
        'telephone' => $faker->randomNumber(),
        'fax' => $faker->randomNumber(),
        'email' => $faker->safeEmail,
        'registreCommerce' => $faker->word,
        'deleted_At' => $faker->dateTimeBetween(),
        'uuid' => $faker->uuid,
        'types_id' => function () {
            return factory(App\Models\Type::class)->create()->id;
        },
        'raisonSociale' => $faker->word,
        'performances_id' => function () {
            return factory(App\Models\Performance::class)->create()->id;
        },
        'agrements_id' => function () {
            return factory(App\Models\Agrement::class)->create()->id;
        },
    ];
});
