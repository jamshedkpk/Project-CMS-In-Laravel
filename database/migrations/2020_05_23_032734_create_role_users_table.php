<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUsersTable extends Migration
{
public function up()
{
Schema::create('role_users', function (Blueprint $table) {
$table->bigIncrements('roleuser_id');
$table->bigInteger('role_id');
$table->bigInteger('user_id');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('role_users');
}
}
