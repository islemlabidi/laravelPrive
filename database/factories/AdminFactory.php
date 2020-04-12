<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        //'name'=>$faker->name,
        'email'=>$faker->email,
        //'email_verified_at'=>now(),
        'password'=>$faker->password,
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});
