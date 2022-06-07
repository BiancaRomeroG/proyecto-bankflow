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
        Schema::create('sc_bitacoras', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('accion');
            $table->string('descripcion');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->unsignedBigInteger('id_sc_empresa');
            $table->foreign('id_sc_empresa')->references('id')->on('sc_empresas');
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
        Schema::dropIfExists('sc_bitacoras');
    }
};
