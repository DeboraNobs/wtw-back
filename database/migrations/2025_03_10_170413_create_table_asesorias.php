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
        Schema::create('asesorias', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->date('fecha_solicitud');
            $table->string('destino');
            $table->string('estado');
            $table->boolean('quiere_postulacion');
            $table->boolean('quiere_seguro');
            $table->boolean('quiere_asistencia_ilimitada');

            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('destino_nacionalidad_id')->constrained('destino_nacionalidad')->onDelete('cascade'); // o se puede colocar cada id por separado

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asesorias');
    }
};
