<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapsoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capso', function (Blueprint $table) {
            $table->id();
            $table->string('tenkh');
            $table->string('tgcap');
            $table->string('hsd');
            $table->string('trangthai');
            $table->string('nguoncap');
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
        Schema::dropIfExists('capso');
    }
}
