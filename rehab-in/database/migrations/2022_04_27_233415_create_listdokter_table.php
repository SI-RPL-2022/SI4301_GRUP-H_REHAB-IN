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
        Schema::create('listdokter', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor');
            $table->foreign('doctor')->references('id')->on('dokterprofiles');
            $table->string('doctor_name');
            $table->foreign('doctor_name')->references('name')->on('dokterprofiles');
            $table->binary('doctor_pic');
            $table->foreign('doctor_pic')->references('pic')->on('dokterprofiles');
            $table->binary('doctor_desc');
            $table->foreign('doctor_desc')->references('desc')->on('dokterprofiles');
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
        Schema::dropIfExists('listdokter');
    }
};
