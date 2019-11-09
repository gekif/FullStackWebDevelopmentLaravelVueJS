<?php

use Faker\Generator as Faker;
use App\Question;

$factory->define(Question::class, function (Faker $faker) {
    return [

        // rtrim function is to delete the dot notation
        'title' => rtrim($faker->sentence(rand(5, 10)), "."),

        // This will convert from array to string, in tinker it will add \n (separated new line)
        'body' => $faker->paragraph(rand(3, 7), true),

        // Integer number
        'views' => rand(0, 10),
        'answers_count' => rand(0, 10),
        'votes' => rand(-3, 10),


    ];
});
