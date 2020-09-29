<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [

      'title' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
      'text' => $faker -> paragraph($nbSentences = 3, $variableNbSentences = true),
      'category' => $faker -> word(),
      'like' => $faker -> randomNumber($nbDigits = 6, $strict = false),
      'dislike' => $faker -> randomNumber($nbDigits = 6, $strict = false)

    ];
});
