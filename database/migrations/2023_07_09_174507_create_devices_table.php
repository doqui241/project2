<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('ma_device');
            $table->string('name_device');
            $table->string('adress');
            $table->string('loai_device');
            $table->unsignedBigInteger('dichvusd');
            $table->foreign('dichvusd')->references('id')->on('services');
            $table->string('username');
            $table->string('password');
            $table->unsignedBigInteger('status_kn');
            $table->unsignedBigInteger('status_hd');
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
        Schema::dropIfExists('devices');
    }
}
