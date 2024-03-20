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
        Schema::create('students', function (Blueprint $table) {
              // Define custom primary key column 'student_id'
              $table->string('student_id')->primary();
              // Other necessary columns
              $table->string('first_name');
              $table->string('last_name');
              $table->string('email')->unique();
              $table->string('phone_number');
              $table->string('nationality');
              $table->date('date_of_birth');
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
        Schema::dropIfExists('students');
    }
};
