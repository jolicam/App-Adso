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
            $table->id();
            
            //$table->unsignedBigInteger('servicio_id');
            $table->unsignedBigInteger('servicio_id'); // Clave foránea para el servicio

            //$table->unsignedBigInteger('mecanico_id');
            $table->unsignedBigInteger('mecanico_id');  // Clave foránea para el mecánico

            // $table->unsignedBigInteger('repuesto_id');
            $table->unsignedBigInteger('repuesto_id');  // Clave foránea para el repuesto

            //$table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');

            //$table->foreign('mecanico_id')->references('id')->on('mecanicos')->onDelete('cascade')
            $table->foreign('mecanico_id')->references('id')->on('mecanicos')->onDelete('cascade');
            
            //$table->foreign('repuesto_id')->references('id')->on('repuestos')->onDelete('cascade');
            $table->foreign('repuesto_id')->references('id')->on('repuestos')->onDelete('cascade');

            $table->timestamps();
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
