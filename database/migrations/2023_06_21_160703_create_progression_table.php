<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progression', function (Blueprint $table) {
            $table->id();
            $table->string('stt');
            $table->unsignedBigInteger('ten_kh');
            $table->foreign('ten_kh')->references('id')->on('users');
            $table->unsignedBigInteger('id_service');
            $table->foreign('id_service')->references('id')->on('services');
            $table->datetime('time_start');
            $table->datetime('hsd');
            $table->string('status');
            $table->unsignedBigInteger('nguoncap');
            $table->foreign('nguoncap')->references('id')->on('devices');
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
        Schema::dropIfExists('progression');
    }
}
