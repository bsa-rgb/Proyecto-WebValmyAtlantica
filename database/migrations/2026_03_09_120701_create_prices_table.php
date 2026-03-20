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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cup_id')->constrained()->onDelete('cascade');

            // Energía (hasta 6 periodos) - 8 dígitos en total, 6 decimales
            $table->decimal('p1_e', 8, 6)->nullable();
            $table->decimal('p2_e', 8, 6)->nullable();
            $table->decimal('p3_e', 8, 6)->nullable();
            $table->decimal('p4_e', 8, 6)->nullable();
            $table->decimal('p5_e', 8, 6)->nullable();
            $table->decimal('p6_e', 8, 6)->nullable();

            // Potencia (hasta 6 periodos)
            $table->decimal('p1_p', 12, 6)->nullable();
            $table->decimal('p2_p', 12, 6)->nullable();
            $table->decimal('p3_p', 12, 6)->nullable();
            $table->decimal('p4_p', 12, 6)->nullable();
            $table->decimal('p5_p', 12, 6)->nullable();
            $table->decimal('p6_p', 12, 6)->nullable();

            // Lógica de fechas
            $table->date('fecha_vigor');
            $table->date('fecha_fin')->nullable(); // Se rellenará cuando entre un precio nuevo

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
