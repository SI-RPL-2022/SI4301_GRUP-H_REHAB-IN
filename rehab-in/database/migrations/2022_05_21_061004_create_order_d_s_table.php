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
        Schema::create('order_d_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient')->unsigned();
            $table->foreign('patient')->references('id')->on('users');
            $table->foreignId('id_dokter')->unsigned();
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
        Schema::dropIfExists('order_d_s');
    }
};
