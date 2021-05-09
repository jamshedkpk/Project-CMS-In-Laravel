<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateusersTable extends Migration
{
public function up()
{
Schema::create('users', function (Blueprint $table) {
$table->bigIncrements('user_id');
$table->string('user_name');
$table->string('user_email')->unique();
$table->string('user_password');
});
}
public function down()
{
Schema::dropIfExists('users');
}
}
