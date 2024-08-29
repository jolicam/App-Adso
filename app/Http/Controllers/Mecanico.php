<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mecanicos', function (Blueprint $table) {
            $table->id();  
            $table->string('nombre');  
            $table->string('apellido');  
            $table->string('documento');  
            $table->string('telefono');  

            //$table->unsignedBigInteger('especialidad_id');
            $table->unsignedBigInteger('especialidad_id');  

            // claves foráneas
            $table->foreign('especialidad_id')
                  ->references('id')
                  ->on('especialidades')
                  ->onDelete('cascade');

            $table->timestamps();  
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mecanicos');
    }
};
