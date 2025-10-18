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
        Schema::create('prospectos_clientes', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['prospecto', 'cliente'])->default('prospecto');
            $table->foreignId('asesor_id')->nullable()->constrained('usuarios')->cascadeOnUpdate()->nullOnDelete();
            $table->string('nombre', 150);
            $table->string('dni', 20)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('edad')->nullable();
            $table->enum('genero', ['F','M','Otro'])->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('direccion', 200)->nullable();
            $table->string('distrito_ciudad', 100)->nullable();
            $table->enum('grado_estudio', [
                'Secundaria completa',
                'Técnico incompleto',
                'Técnico completo',
                'Superior incompleta',
                'Superior completa'
            ])->nullable();
            $table->string('centro_educativo', 150)->nullable();
            $table->enum('estado_general', ['prospecto','en_proceso','confirmado','activo','finalizado'])->default('prospecto');
            $table->enum('subestado', ['pendiente_firma','pendiente_pago','requiere_llamada','ninguno'])->default('ninguno');
            $table->text('comentarios')->nullable();
            $table->timestamp('fecha_registro')->useCurrent();
            $table->string('contrato_url', 255)->nullable();
            $table->enum('firma_tipo', ['manual','digital_presencial','digital_remota'])->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prospectos_clientes');
    }
};
