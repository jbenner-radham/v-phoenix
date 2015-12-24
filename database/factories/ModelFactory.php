<?php

use Faker\Generator;

$factory->define(App\Entity::class, function (Generator $faker) {
    return [
        'email'             => $faker->email,
        'family_name'       => $faker->lastName,
        'given_name'        => $faker->firstName,
        'title'             => $faker->title,
        'country_name'      => $faker->country,
        'org'               => $faker->company,
        'postal_code'       => $faker->postcode,
        'street_address'    => $faker->streetAddress,
        'locality'          => $faker->locale,
        'tel'               => $faker->phoneNumber,
        'kind_id'           => $faker->numberBetween(1,6)
    ];
});

$factory->define(App\Lead::class, function (Generator $faker) {

    return [
        'description'       => $faker->paragraph(3),
        'email_opt_out'     => $faker->numberBetween(0,1),
        'include_packing'   => $faker->numberBetween(0,1),
        'entity_id'         => $faker->numberBetween(1,50),
        'lead_sources_id'   => $faker->numberBetween(1,12),
        'lead_statuses_id'  => $faker->numberBetween(1,11)
    ];
});