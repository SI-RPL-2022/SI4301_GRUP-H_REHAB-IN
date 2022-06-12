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
            $table->string('pic')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('spesialis')->nullable();
            $table->string('jadwal_day')->nullable();
            $table->string('jadwal_time')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('dokterprofiles');
    }
};
