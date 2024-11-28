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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id(); // ID principal
            $table->string('placa')->unique(); // Placa única del vehículo
            $table->string('marca'); // Marca del vehículo
            $table->string('modelo'); // Modelo del vehículo
            $table->integer('año'); // Año del vehículo

            // Clave foránea para clientes
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                  ->references('id')
                  ->on('clientes')
                  ->onDelete('cascade'); 

            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
