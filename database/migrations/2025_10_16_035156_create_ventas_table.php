<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('prospectos_clientes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('asesor_id')->constrained('usuarios')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('programa_id')->constrained('programas')->cascadeOnUpdate()->restrictOnDelete();
            $table->enum('estado', ['prospecto','en_proceso','cerrada','perdida'])->default('prospecto');
            $table->text('comentarios_cierre')->nullable();
            $table->dateTime('fecha_venta')->useCurrent();
            $table->decimal('total', 10, 2)->default(0.00);
            $table->integer('numero_cuotas')->default(1);
            $table->boolean('matricula_pagada')->default(false);
            $table->timestamp('fecha_registro')->useCurrent();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
