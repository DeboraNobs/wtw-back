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
        Schema::create('destino_nacionalidad', function (Blueprint $table) {
            $table->id();
            $table->integer('num_cupos'); // atributo tabla pivot. el num_cupos depende de la nacionalidad y del destino
            $table->foreignId('destino_id')->constrained('destinos')->onDelete('cascade');
            $table->foreignId('nacionalidad_id')->constrained('nacionalidades')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destino_nacionalidad');
    }
};
