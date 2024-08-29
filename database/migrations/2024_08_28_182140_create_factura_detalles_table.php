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
        Schema::create('factura_detalles', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('factura_id');  
            $table->unsignedBigInteger('factura_id');  // Clave foránea para la factura

            //$table->unsignedBigInteger('servicio_id');  
            $table->unsignedBigInteger('servicio_id');  // Clave foránea para el servicio

            $table->integer('cantidad');  

            $table->decimal('sub_total', 10, 2);  

            //$table->foreign('factura_id')->references('id')->on('facturas')->onDelete('cascade');
            $table->foreign('factura_id')->references('id')->on('facturas')->onDelete('cascade');

            //$table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');

        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura_detalles');
    }
};
