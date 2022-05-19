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
        Schema::create('dokters', function (Blueprint $table) {
            $table->bigIncrements('id',255)->unsigned();
            $table->foreignId('id_dokter');
            $table->foreign('id_dokter')->references('id')->on('users');
            $table->string('pic');
            $table->string('deskripsi');
            $table->string('spesialis');
            $table->string('jadwal_day');
            $table->string('jadwal_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokterprofiles');
    }
};
