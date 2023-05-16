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
        Schema::create('docrequests', function (Blueprint $table) {
            $table->id();
            $table->string('stud_id');
            $table->string('Name');
            $table->string('Course');

            $table->string('date');
            $table->string('HonDismissal');
            $table->string('Special_Order');
            $table->string('Diploma');
            $table->string('TOR');
            $table->string('Form137');
            $table->string('GoodMoral');

            $table->string('UnitEarned');
            $table->string('Graduation');
            $table->string('GWA');
            $table->string('Grades');

            $table->string('Auth_Transcript');
            $table->string('Auth_Special_Order');
            $table->string('Auth_Diploma');

            $table->string('Purpose');
            $table->string('Status');

            $table->string('cp');
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
        Schema::dropIfExists('docrequests');
    }
};
