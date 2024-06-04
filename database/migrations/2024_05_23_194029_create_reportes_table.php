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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id(); // ID del reporte
            $table->foreignId('user_id') // Usuario que envió el reporte
                  ->constrained()
                  ->onDelete('cascade');
            $table->string('tipo_mascota'); // Tipo de mascota (perro, gato, ave, etc.)
            $table->string('tipo_reporte'); // Tipo de reporte (pérdida, abuso, adopción, salud, etc.)
            $table->text('descripcion'); // Descripción breve
            $table->string('ubicacion'); // Ubicación
            $table->string('estado')->default('abierto'); // Estado del reporte
            $table->string('prioridad')->default('media'); // Prioridad
            $table->timestamps();
            $table->softDeletes(); // Borrado lógico
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
