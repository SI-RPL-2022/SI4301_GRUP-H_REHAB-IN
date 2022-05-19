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
        Schema::create('historis', function (Blueprint $table) {
            $table->bigIncrements('id',255)->unsigned();
            $table->bigInteger('noInv');
            $table->string('jenis_layanan');
            $table->string('bukti_pembayaran');
            $table->string('deskripsi');
            $table->bigInteger('price');
            $table->string('waktu')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('tipe')->nullable();
            $table->foreignId('patient')->unsigned();
            $table->foreign('patient')->references('id')->on('users');
            $table->foreignId('id_kamar')->unsigned()->nullable();
            $table->foreign('id_kamar')->references('id')->on('kamars');
            $table->foreignId('id_dokter')->unsigned()->nullable();
            $table->foreign('id_dokter')->references('id')->on('dokters');
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
        Schema::dropIfExists('historis');
    }
};
