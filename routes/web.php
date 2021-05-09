<?php
//Route::get('/', function () {
//    return view('welcome');
//});
Route::prefix('Admin')->group(function()
{
Route::view('/','Dashboard.Layout.Admin');	
Route::resource('User','UserController');
Route::resource('Role','RoleController');
Route::resource('Catagory','CatagoryController');
Route::resource('Post','PostController');
Route::resource('Profile','ProfileController');
Route::resource('RoleUser','RoleUserController');
});