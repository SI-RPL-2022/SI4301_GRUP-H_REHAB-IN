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
        Schema::create('revkamar', function (Blueprint $table) {
            $table->id();
            $table->string('kamar_id');
            $table->foreign('kamar_id')->references('id')->on('kamars');
            $table->binary('pic');
            $table->foreign('pic')->references('pic')->on('kamars');
            $table->string('type');
            $table->foreign('type')->references('type')->on('kamars');
            $table->unsignedBigInteger('patient');
            $table->foreign('patient')->references('id')->on('users');
            $table->string('patient_name');
            $table->foreign('patient_name')->references('name')->on('users');
            $table->date('checkin');
            $table->pembayaran('boolean');

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
        Schema::dropIfExists('revkamar');
    }
};
