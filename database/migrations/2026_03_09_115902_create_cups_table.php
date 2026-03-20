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
        Schema::create('cups', function (Blueprint $table) {
            $table->id();

            // Relaciones
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->foreignId('marketer_id')->constrained()->onDelete('restrict'); 
            
            // Datos del CUP
            $table->string('code')->unique();
            $table->string('tariff_type');

            // Dirección específica del suministro
            $table->string('address_type');
            $table->string('address_name');
            $table->string('address_number');
            $table->string('address_info')->nullable();
            $table->string('localidad');
            $table->string('cp');
            $table->string('provincia');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cups');
    }
};
