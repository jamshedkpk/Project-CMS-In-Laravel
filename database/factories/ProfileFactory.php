<?php
use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
return 
[
'user_id'=>random_int(1,5),
'profile_image'=>$faker->title,
'profile_country'=>$faker->country,
'profile_address'=>$faker->address,
'profile_mobileno'=>random_int(1,500),
'profile_cnicno'=>random_int(1,500),
];
});
