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
        Schema::create('orderkonsuls', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('detailkeluhan');
            $table->unsignedBigInteger('patient');
            $table->foreign('patient')->references('id')->on('users');
            $table->string('patient_name');
            $table->foreign('patient_name')->references('name')->on('users');
            $table->unsignedBigInteger('doctor');
            $table->foreign('doctor')->references('id')->on('dokterprofiles');
            $table->string('doctor_name');
            $table->foreign('doctor_name')->references('name')->on('dokterprofiles');
            $table->boolean('pembayaran');
            $table->timestamps();
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderkonsuls');
    }
};
