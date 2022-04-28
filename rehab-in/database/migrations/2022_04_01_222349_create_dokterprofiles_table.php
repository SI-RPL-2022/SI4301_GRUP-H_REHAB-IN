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
        Schema::create('dokterprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('email');
            $table->string('password');
            $table->binary('pic');
            $table->string('name');
            $table->string('age');
            $table->string('spesialis');
            $table->string('jadwal_day');
            $table->string('jadwal_time');
            $table->text('desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokterprofiles');
    }
};
