<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            // step-1
            $table->bigIncrements('id');
            $table->binary('pic');
            $table->string('name');
            $table->string('gender');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('password_confirmation');
            // step-2
            $table->string('institution');
            $table->string('teacher_subject');
            $table->string('qualification');
            $table->string('background_medium');
            $table->string('present_location');
            $table->string('permanent_address')->nullable();

            $table->year('year');
            $table->string('institute');
            $table->string('group');
            $table->float('cgpa', 1, 2);

            $table->year('year2');
            $table->string('institute2');
            $table->string('group2');
            $table->float('cgpa2', 1, 2);

            $table->year('year3')->nullable();
            $table->string('institute3')->nullable();
            $table->string('group3')->nullable();
            $table->float('cgpa3', 1, 2)->nullable();

            $table->year('year4')->nullable();
            $table->string('institute4')->nullable();
            $table->string('group4')->nullable();
            $table->float('cgpa4', 1, 2)->nullable();
            $table->string('about_your')->nullable();
            // step-3
            $table->string('districts');
            $table->string('preferred_area');
            $table->string('preferred_medium');
            $table->string('preferred_classes');
            $table->string('preferred_subjects');
            $table->string('days_Per_week');
            $table->string('timing_shift');
            $table->string('expected_salary');
            $table->string('preffered_tutoring_style');
            $table->string('tuition_experience')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
