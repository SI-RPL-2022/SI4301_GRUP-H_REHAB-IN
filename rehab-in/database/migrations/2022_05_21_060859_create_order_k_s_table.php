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
            $table->bigInteger('noInv')->nullable();
            $table->string('waktu')->nullable();
            $table->string('jenis')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('patient_id')->unsigned()->nullable();
            $table->foreign('patient_id')->references('id')->on('users');
            $table->foreignId('kamar_id')->unsigned()->nullable();
            $table->foreign('kamar_id')->references('id')->on('kamars');
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
