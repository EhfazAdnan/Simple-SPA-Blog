<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'cat_name' => $faker->name,
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'cat_id' => rand(1, 10),
        'user_id' => rand(1, 10),
        'comment_id' => rand(1, 10),
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'photo' => $faker->imageUrl,
    ];
});
