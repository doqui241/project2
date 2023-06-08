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
            $table->string('dichvusd');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_status_complete');
            $table->foreign('id_status_complete')->references('id')->on('status_complete');
            $table->unsignedBigInteger('id_status_hd');
            $table->foreign('id_status_hd')->references('id')->on('status_activate');
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
