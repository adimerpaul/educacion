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
            $table->string('accionInstitucional')->nullable();
            $table->string('accionCortoPlazo')->nullable();
            $table->string('resultadoEsperado1')->nullable();
            $table->string('resultadoEsperado2')->nullable();
            $table->string('totalPresupuesto')->nullable();

            $table->string('accionCortoPlazo1')->nullable();
            $table->string('accionCortoPlazo2')->nullable();
            $table->string('accionCortoPlazo3')->nullable();
            $table->string('resultadoEsperado1')->nullable();
            $table->string('resultadoEsperado2')->nullable();
            $table->string('resultadoEsperado3')->nullable();
            $table->string('resultadoEsperado4')->nullable();
            $table->string('resultadoEsperado5')->nullable();
            $table->string('fechaPrevistaInicio1')->nullable();
            $table->string('fechaPrevistaInicio2')->nullable();
            $table->string('fechaPrevistaInicio3')->nullable();
            $table->string('fechaPrevistaFinalizacion1')->nullable();
            $table->string('fechaPrevistaFinalizacion2')->nullable();
            $table->string('fechaPrevistaFinalizacion3')->nullable();
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
