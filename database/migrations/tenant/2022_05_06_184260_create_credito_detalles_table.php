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
            $table->date('fecha_fin');
            $table->string('descripcion');
            $table->string('estado');
            $table->float('interes');
            $table->float('capital');
            $table->string('pago_estado');
            $table->integer('numero_cuotas');
            $table->unsignedBigInteger('id_custodia');
            $table->foreign('id_custodia')->references('id')->on('custodias');
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
