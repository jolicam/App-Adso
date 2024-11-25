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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id(); // ID principal
            $table->string('descripcion'); // Descripción del servicio
            $table->decimal('costo', 8, 2); // Costo del servicio
            $table->date('fecha'); // Fecha del servicio

            // Clave foránea para vehículos
            $table->string('vehiculo_placa'); 
            $table->foreign('vehiculo_placa')
                  ->references('placa')
                  ->on('vehiculos')
                  ->onDelete('cascade');

            // Clave foránea para mecánicos
            $table->unsignedBigInteger('mecanico_id');
            $table->foreign('mecanico_id')
                  ->references('id')
                  ->on('mecanicos')
                  ->onDelete('cascade');

            $table->timestamps(); // Marca de tiempo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
