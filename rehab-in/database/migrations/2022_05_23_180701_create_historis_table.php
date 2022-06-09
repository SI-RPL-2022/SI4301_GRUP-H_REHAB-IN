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
            $table->foreignId('orderkamar_id')->nullable();
            $table->foreign('orderkamar_id')->references('id')->on('order_k_s');
            $table->foreignId('orderdokter_id')->nullable();
            $table->foreign('orderdokter_id')->references('id')->on('order_d_s');
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
