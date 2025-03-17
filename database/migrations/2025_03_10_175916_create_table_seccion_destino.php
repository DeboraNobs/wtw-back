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
        Schema::create('seccion_destino', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destino_id')->constrained('destinos')->onDelete('cascade');
            $table->foreignId('seccion_id')->constrained('secciones')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seccion_destino');
    }
};
