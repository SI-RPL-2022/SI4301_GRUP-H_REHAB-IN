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
        Schema::create('kamars', function (Blueprint $table) {
            $table->bigIncrements('id',255)->unsigned();
            $table->integer('no_kamar')->nullable();
            $table->string('nama_kamar')->nullable();
            $table->string('kelas')->nullable();
            $table->string('facility')->nullable();
            $table->string('code')->nullable();
            $table->string('status')->nullable();
            $table->string('pic')->nullable();
            $table->bigInteger('price')->nullable();
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
        Schema::dropIfExists('kamars');
    }
};
