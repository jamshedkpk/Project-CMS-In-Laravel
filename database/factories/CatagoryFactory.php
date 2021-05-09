<?php
use App\Catagory;
use Faker\Generator as Faker;

$factory->define(Catagory::class, function (Faker $faker) {
    return [
'catagory_title'=>$faker->title,
'catagory_image'=>$faker->title,
    ];
});
