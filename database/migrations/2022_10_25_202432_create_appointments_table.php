<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('appointment_number')->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
            $table->string('name');
            $table->string('email');
            $table->string('s_id');
            $table->string('dept')->nullable();
            $table->string('session')->nullable();
            $table->string('dormitory')->nullable();
            $table->string('phone');
            $table->string('birthdate')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('date');
            $table->string('time');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
