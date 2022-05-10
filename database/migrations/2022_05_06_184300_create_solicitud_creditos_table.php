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
        Schema::create('solicitud_creditos', function (Blueprint $table) {
            $table->id();
            $table->string('monto');
            $table->dateTime('tiempo');
            $table->string('motivo');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_tipo_credito');
            $table->unsignedBigInteger('id_carpeta_credito');
            $table->unsignedBigInteger('id_credito_detalle');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_tipo_credito')->references('id')->on('tipo_creditos');
            $table->foreign('id_carpeta_credito')->references('id')->on('carpeta_creditos');
            $table->foreign('id_credito_detalle')->references('id')->on('credito_detalles');
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
        Schema::dropIfExists('solicitud_creditos');
    }
};
