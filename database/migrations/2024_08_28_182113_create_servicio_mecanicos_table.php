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
        Schema::create('servicio_mecanicos', function (Blueprint $table) {
            $table->id(); // ID principal

            // Clave foránea para servicios
            $table->unsignedBigInteger('servicio_id');
            $table->foreign('servicio_id')
                  ->references('id')
                  ->on('servicios')
                  ->onDelete('cascade');

            // Clave foránea para mecánicos
            $table->unsignedBigInteger('mecanico_id');
            $table->foreign('mecanico_id')
                  ->references('id')
                  ->on('mecanicos')
                  ->onDelete('cascade');

            // Clave foránea para repuestos
            $table->unsignedBigInteger('repuesto_id');
            $table->foreign('repuesto_id')
                  ->references('id')
                  ->on('repuestos')
                  ->onDelete('cascade');

            $table->timestamps(); // Marca de tiempo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio_mecanicos');
    }
};
