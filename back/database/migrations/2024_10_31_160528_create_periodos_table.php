<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->id();
            $table->integer('periodo');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->text('accionInstitucional')->nullable();
            $table->text('accionCortoPlazo')->nullable();
            $table->text('resultadoEsperado1')->nullable();
            $table->text('resultadoEsperado2')->nullable();
            $table->text('totalPresupuesto')->nullable();

            $table->text('accionCortoPlazo1')->nullable();
            $table->text('accionCortoPlazo2')->nullable();
            $table->text('accionCortoPlazo3')->nullable();
            $table->text('resultadoEsperadoGestion1')->nullable();
            $table->text('resultadoEsperadoGestion2')->nullable();
            $table->text('resultadoEsperadoGestion3')->nullable();
            $table->text('resultadoEsperadoGestion4')->nullable();
            $table->text('resultadoEsperadoGestion5')->nullable();
            $table->date('fechaPrevistaInicio1')->nullable();
            $table->date('fechaPrevistaInicio2')->nullable();
            $table->date('fechaPrevistaInicio3')->nullable();
            $table->date('fechaPrevistaFinalizacion1')->nullable();
            $table->date('fechaPrevistaFinalizacion2')->nullable();
            $table->date('fechaPrevistaFinalizacion3')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodos');
    }
};
