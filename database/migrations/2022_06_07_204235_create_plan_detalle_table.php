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
        Schema::create('plan_detalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_planes');
            $table->unsignedBigInteger('id_detalle');
            $table->foreign('id_planes')->references('id')->on('planes');
            $table->foreign('id_detalle')->references('id')->on('detalle');
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
        Schema::dropIfExists('plan_detalle');
    }
};
