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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    $genders = array('male', 'female', 'other');
    return [
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123qwe'),
        'remember_token' => str_random(10),
        'gender' => $genders[array_rand($genders)],
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {

	return [
		'title' => $faker->sentence,
		'content' => $faker->paragraph,
		'user_id' => App\User::all()->random()->id,
	];

});
