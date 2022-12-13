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
            $table->string('id');
            $table->string('studentId')->primary();
            $table->string('familyName');
            $table->string('firstName');
            $table->string('middleInitial');
            $table->string('maidenName');
            $table->string('email')->unique();
            $table->string('gender');
            $table->date('birthday');
            $table->string('civilStatus');
            $table->string('presentAddress');
            $table->integer('yearGraduated');
            $table->string('course');
            $table->string('examsPassed');
            $table->string('awards');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('role')->default('0');
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
