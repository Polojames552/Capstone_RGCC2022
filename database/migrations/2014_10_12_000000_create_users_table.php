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
        Schema::create('users', function (Blueprint $table) {
            $table->id();   
            $table->string('student_id')->unique();
            $table->string('First_Name');
            $table->string('Middle_Name');
            $table->string('Last_Name');
            $table->string('suffix');
            $table->string('course');
            $table->string('year');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
            $table->string('cp_num');
            $table->rememberToken();
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
};
