<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id')->unique();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('Caste')->nullable();
            $table->string('department')->nullable();
            $table->string('class')->nullable();
            $table->string('emp_type')->nullable();
            $table->string('emailAddress')->unique();
            $table->string('phoneNumber')->nullable();
            $table->string('password');
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
};
