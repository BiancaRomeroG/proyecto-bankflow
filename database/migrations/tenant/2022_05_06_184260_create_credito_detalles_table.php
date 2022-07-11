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
        Schema::create('credito_detalles', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('estado')->nullable();
            $table->float('tasa_interes');
            $table->string('pago_estado')->nullable();
            $table->integer('numero_cuotas')->nullable();
            $table->String('duracion');
            $table->unsignedBigInteger('id_carpeta');
            $table->foreign('id_carpeta')->references('id')->on('carpeta_creditos');
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
        Schema::dropIfExists('credito_detalles');
    }
};
