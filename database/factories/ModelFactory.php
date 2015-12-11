<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->email,
//        'password' => bcrypt(str_random(10)),
//        'remember_token' => str_random(10),
//    ];
//});



$factory->defineAs(App\Entity::class, 'individual', function (\Faker\Generator $faker) {
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
        'kind_id'           => 1
    ];
});
