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
        Schema::create('detalle_poas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('poa_id');
            $table->foreign('poa_id')->references('id')->on('poas');
            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materials');
            $table->integer('cantidad');
            $table->double('precio_unitario');
            $table->double('total');
            $table->integer('cantidad_entregada')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_poas');
    }
};
