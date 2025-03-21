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
        Schema::create('destinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('moneda');
            $table->double('salario_minimo');
            $table->double('salario_promedio');
            $table->double('costo_vida_promedio');
            $table->integer('dificultad_visa');
            $table->boolean('aplica_exterior');
            $table->boolean('requiere_estudios');
            $table->boolean('requiere_idiomas');
            $table->boolean('requiere_idiomas'); // ver porque esta repetido

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinos');
    }
};
