<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Course;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->sentence,
        'slug' => Str::slug($name),
        'free' => random_int(0,1),
        'difficulty' => ['beginner', 'intermediate', 'advanced'][random_int(0,2)],
        'type' => ['theory', 'project', 'snippet'][random_int(0,2)]
    ];
});
