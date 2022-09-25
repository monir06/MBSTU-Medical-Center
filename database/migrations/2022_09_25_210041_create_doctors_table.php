<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title'); // dr. / prof. dr. / asst. prof. dr.
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('degree')->nullable(); //  MBBS,  FCPS
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('district')->nullable();
            // $table->string('state')->nullable();
            // $table->string('city')->nullable();
            // $table->string('zipcode')->nullable();
            // $table->string('country')->nullable();
            $table->string('nid')->nullable(); // nid or passport no
            $table->string('regi_no')->nullable(); // bmdc registration number
            $table->string('type')->nullable(); // doctor type [medical/dental]
            $table->string('visit_hour')->nullable(); // visiting hour/availibility
            // $table->string('areas'); // Areas of Expertise
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
        Schema::dropIfExists('doctors');
    }
}
