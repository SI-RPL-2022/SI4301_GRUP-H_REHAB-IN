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
            $table->string('noinv');
            $table->string('jenis_layanan');
            $table->string('bukti_pembayaran');
            $table->foreignId('orderid_kamar')->unsigned()->nullable();
            $table->foreign('orderid_kamar')->references('id')->on('order_k_s');
            $table->foreignId('orderid_dokter')->unsigned()->nullable();
            $table->foreign('orderid_dokter')->references('id')->on('order_d_s');
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
