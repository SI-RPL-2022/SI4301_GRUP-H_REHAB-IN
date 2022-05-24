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
        Schema::create('order_k_s', function (Blueprint $table) {
            $table->bigInteger('id',255)->unsigned();
            $table->bigInteger('noInv');
            $table->string('waktu');
            $table->string('jenis');
            $table->string('status');
            $table->foreignId('patient')->unsigned();
            $table->foreign('patient')->references('id')->on('users');
            $table->foreignId('id_kamar')->unsigned();
            $table->foreign('id_kamar')->references('id')->on('kamars');
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
        Schema::dropIfExists('order_k_s');
    }
};
