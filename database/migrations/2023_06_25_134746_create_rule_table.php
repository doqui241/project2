<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rule', function (Blueprint $table) {
            $table->id();
            $table->integer('end')->nullable();
            $table->integer('start')->nullable();
            $table->integer('prefix')->nullable();
            $table->integer('surfix')->nullable();
            $table->tinyInteger('check_auto')->nullable();
            $table->tinyInteger('check_prefix')->nullable();
            $table->tinyInteger('check_surfix')->nullable();
            $table->tinyInteger('check_reset')->nullable();
            $table->unsignedBigInteger('id_service');
            $table->foreign('id_service')->references('id')->on('services');

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
        Schema::dropIfExists('rule');
    }
}
