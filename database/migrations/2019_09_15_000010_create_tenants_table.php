<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     
    public function up(): void
    {
        //ESTA ES LA TABLA DE LA EMPRESA EN SÍ 
        Schema::create('tenants', function (Blueprint $table) {
            $table->string('id')->primary();
            // your custom columns may go here
            // Si quieres agregar columnas aquí
            // debes declararlo primero en el Tenant Model
            // cualquier columna que no esté declarada en el tenant model
            // se guarda como campo del jason data
            $table->string('name');
            $table->timestamps();
            $table->json('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
}
