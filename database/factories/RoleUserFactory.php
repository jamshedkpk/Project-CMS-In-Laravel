<?php
use App\RoleUser;
use Faker\Generator as Faker;

$factory->define(RoleUser::class, function (Faker $faker) {
return
[
'role_id'=>random_int(1,5),
'user_id'=>random_int(1,5),
];
});
