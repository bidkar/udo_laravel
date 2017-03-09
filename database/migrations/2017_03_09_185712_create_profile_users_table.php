<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // crear la tabla profile_users
        Schema::create('profile_users', function(Blueprint $table) {
            $table->unsignedInteger('user_id')->primary();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('avatar',300)->nullable();
            $table->string('twitter_user',50);
            $table->string('facebook_user',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // eliminar la tabla
        Schema::dropIfExists('profile_users');
    }
}
