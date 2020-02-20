<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    
    return [
    	
    	'name' => $faker->title,
    	'slug' => Str::slug($title),
    	'excerpt' => $faker->text(200),
    	'body' => $faker->text(500),
    	'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    	'file' => $faker->imageUrl($width = 1200, $height = 400),
    ];
});
