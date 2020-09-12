<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_tutor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('name');
            $table->string('gender')->nullable();
            $table->string('institute')->nullable();
            $table->string('medium')->nullable();
            $table->string('class')->nullable();
            $table->integer('Number_of_Students');
            $table->time('time');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('salary');
            $table->string('area');
            $table->string('location_det');
            $table->string('teacher_gender')->nullable();
            $table->string('Days_Per_Week');
            $table->string('Select_Subject');
            $table->string('others');      
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
        Schema::dropIfExists('request_tutor');
    }
}
