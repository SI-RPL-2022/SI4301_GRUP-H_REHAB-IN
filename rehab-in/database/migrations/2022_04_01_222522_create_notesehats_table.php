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
            $table->bigIncrements('id',255)->unsigned();
            $table->foreignId('patient')->unsigned();
            $table->foreign('patient')->references('id')->on('users');
            $table->foreignId('doctor')->unsigned();
            $table->foreign('doctor')->references('id')->on('dokters');
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
