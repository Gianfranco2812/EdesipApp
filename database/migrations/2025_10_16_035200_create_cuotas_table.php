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
        Schema::create('cuotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venta_id')->constrained('ventas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('numero_cuota');
            $table->decimal('monto', 10, 2);
            $table->date('fecha_vencimiento');
            $table->enum('estado', ['pendiente','pagada','vencida','validacion_pendiente'])->default('pendiente');
            $table->string('comprobante_url', 255)->nullable();
            $table->enum('medio_pago', ['Yape','Plin','Transferencia','Efectivo'])->nullable();
            $table->dateTime('fecha_pago')->nullable();
            $table->foreignId('validado_por')->nullable()->constrained('usuarios')->cascadeOnUpdate()->nullOnDelete();
            $table->text('observacion')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuotas');
    }
};
