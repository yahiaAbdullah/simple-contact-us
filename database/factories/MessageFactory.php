<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Message;
use Faker\Generator as Faker;
use App\Models\User;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'user_id' => User::query()->inRandomOrder()->first()->id,
        'title' => $faker->text(20),
        'message' => $faker->text(),
        'is_read' => $faker->randomElement([true, false]),
    ];
});
