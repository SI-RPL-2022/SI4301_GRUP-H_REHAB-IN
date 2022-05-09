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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->bigIncrements('id',255)->unsigned();
            $table->string('type');
            $table->string('detailkeluhan');
            $table->foreignId('patient')->unsigned();
            $table->foreign('patient')->references('id')->on('users');
            $table->foreignId('doctor')->unsigned();
            $table->foreign('doctor')->references('id')->on('dokters');
            $table->string('pembayaran',255);
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
        Schema::dropIfExists('reservasis');
    }
};
