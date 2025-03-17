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
        Schema::create('destino_nacionalidad_requisitos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destino_nacionalidad_id')->constrained('destino_nacionalidad')->onDelete('cascade');
            $table->foreignId('requisito_id')->constrained('requisitos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destino_nacionalidad_requisitos');
    }
};
