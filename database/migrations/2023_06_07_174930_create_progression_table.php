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
            $table->string('time_cap');
            $table->string('hsd');
            $table->string('status_progression');
            // $table->string('nguoncao');
            $table->unsignedBigInteger('nguoncao');
            $table->foreign('nguoncao')->references('id')->on('devices');
            $table->unsignedBigInteger('sdt');
            $table->foreign('sdt')->references('id')->on('users');
            $table->unsignedBigInteger('email');
            $table->foreign('email')->references('id')->on('users');
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
