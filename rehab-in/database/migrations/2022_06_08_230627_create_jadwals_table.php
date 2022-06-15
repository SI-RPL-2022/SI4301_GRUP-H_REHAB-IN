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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('shift')->nullable();
            $table->string('tempat')->nullable();
            $table->string('day')->nullable();
            $table->string('namadokter')->nullable();
            $table->string('namapasien')->nullable();
            $table->foreignId('id_dokter');
            $table->foreign('id_dokter')->references('id')->on('users');
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
        Schema::dropIfExists('jadwals');
    }
};
