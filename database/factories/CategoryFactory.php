<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
	
    return [

    	'name' => $faker->name,
    	'slug' => $faker->Str::slug(),
    	'body' => $faker->text, 
    ];
});
