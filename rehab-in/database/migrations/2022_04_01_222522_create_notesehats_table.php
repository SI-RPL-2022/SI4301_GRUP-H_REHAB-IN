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
            $table->bigIncrements('id', 255)->unsigned();
            $table->foreignId('patient')->unsigned();
            $table->foreign('patient')->references('id')->on('users');
            $table->string('waktu');
            $table->longText('descwaktu');
            $table->string('kualitas');
            $table->longText('desckualitas');
            $table->string('olahraga');
            $table->longText('descolahraga');
            $table->string('mood');
            $table->longText('descmood');
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
        Schema::dropIfExists('notesehats');
    }
};
