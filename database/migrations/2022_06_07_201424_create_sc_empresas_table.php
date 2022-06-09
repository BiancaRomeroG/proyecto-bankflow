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
        Schema::create('sc_empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('cant_trabajadores');
            $table->unsignedBigInteger('id_planes');
            $table->unsignedBigInteger('id_usuario_admin');
            $table->foreign('id_planes')->references('id')->on('planes');
            $table->foreign('id_usuario_admin')->references('id')->on('usuario_admin');
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
        Schema::dropIfExists('sc_empresas');
    }
};
