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
        Schema::create('notesehats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient');
            $table->foreign('patient')->references('id')->on('users');
            $table->string('patient_name');
            $table->foreign('patient_name')->references('name')->on('users');
            $table->unsignedBigInteger('doctor');
            $table->foreign('doctor')->references('id')->on('dokterprofiles');
            $table->string('doctor_name');
            $table->foreign('doctor_name')->references('name')->on('dokterprofiles');
            $table->time('waktu');
            $table->string('kualitas');
            $table->string('olahraga');
            $table->string('mood');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notesehats');
    }
};
