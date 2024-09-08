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
            $table->id();
            $table->string('descripcion');
            $table->decimal('costo', 8, 2);  
            $table->date('fecha');  
            $table->string('vehiculo_placa');  

            // $table->unsignedBigInteger('mecanico_id');
            $table->unsignedBigInteger('mecanico_id');

            // $table->foreign('vehiculo_placa')->references('placa')->on('vehiculos')->onDelete('cascade');
            $table->foreign('vehiculo_placa')->references('placa')->on('vehiculos')->onDelete('cascade');
            //$table->foreign('mecanico_id')->references('id')->on('mecanicos')->onDelete('cascade');
            $table->foreign('mecanico_id')->references('id')->on('mecanicos')->onDelete('cascade');
            
            $table->timestamps();
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
