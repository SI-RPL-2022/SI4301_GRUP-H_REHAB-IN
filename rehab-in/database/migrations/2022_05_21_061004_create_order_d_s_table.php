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
            $table->bigInteger('id',255)->unsigned();
            $table->bigInteger('noInv')->nullable();
            $table->string('jenis')->nullable();
            $table->string('keluhan')->nullable();
            $table->string('detailkel')->nullable();
            $table->string('waktu')->nullable();
            $table->string('jenislayanan')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('patientid')->unsigned()->nullable();
            $table->foreign('patientid')->references('id')->on('users');
            $table->foreignId('dokterid')->unsigned()->nullable();
            $table->foreign('dokterid')->references('id')->on('users');
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
