<?php
use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
return [
'user_name'=>$faker->name,
'user_email'=>$faker->email,
'user_password'=>$faker->password,
];
});
