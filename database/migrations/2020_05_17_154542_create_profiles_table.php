<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
public function up()
{
Schema::create('profiles', function (Blueprint $table) {
$table->bigIncrements('profile_id');
$table->bigInteger('user_id');
$table->string('profile_country');
$table->string('profile_image');
$table->bigInteger('profile_mobileno');
$table->bigInteger('profile_cnicno');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('profiles');
}
}
