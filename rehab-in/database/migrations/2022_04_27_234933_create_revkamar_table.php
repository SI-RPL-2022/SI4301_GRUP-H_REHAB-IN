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
            $table->bigIncrements('id',255)->unsigned();
            $table->foreignId('kamar_id');
            $table->foreign('kamar_id')->references('id')->on('kamars');
            $table->foreignId('patient');
            $table->foreign('patient')->references('id')->on('users');
            $table->date('checkin');
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
