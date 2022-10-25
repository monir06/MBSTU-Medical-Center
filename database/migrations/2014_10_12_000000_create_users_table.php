<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('google_id')->nullable();
            $table->rememberToken();
            $table->string('gender')->nullable();
            $table->string('dept')->nullable();
            $table->string('session')->nullable();
            $table->string('phone')->nullable();
            $table->string('dormitory')->nullable();
            $table->string('district')->nullable();
            $table->string('s_id')->nullable(); // student id
            $table->string('birthdate')->nullable();
            $table->string('blood_group')->nullable();
            $table->tinyInteger( 'status' )->default(0);
            $table->text('more_info')->nullable();
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
        Schema::dropIfExists('users');
    }
}
