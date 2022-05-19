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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id',255)->unsigned();
            $table->string('username',255)->unique();
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->string('tanggallahir');
            $table->string('address');
            $table->bigInteger('nohp');
            $table->bigInteger('role')->nullable();
            $table->string('pic',1000)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
