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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Teacher::class, function(Faker\Generator $faker) {
	return [
		'name' => $faker->name
	];
});

$factory->define(App\DynamicSubject::class, function(Faker\Generator $faker) {
	return [
		'origin_date' => $faker->date('2016-10-28'),
		'origin_period' => 5,
		'origin_teacher_id' => 1,
		'origin_subject_id' => 1,
		'origin_class_id' => 1,
		'transferred_date' => $faker->date('2016-10-27'),
		'transferred_period' => 5,
		'transferred_teacher_id' => 2,
		'transferred_subject_id' => 2,
		'transferred_class_id' => 2
	];
});
