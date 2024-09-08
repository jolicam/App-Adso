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
        
        if (!Schema::hasTable('mecanicos')) {
            Schema::create('mecanicos', function (Blueprint $table) {
                $table->id();
                $table->string('nombre');
                $table->string('apellido');
                $table->string('documento');
                $table->string('telefono');
                $table->unsignedBigInteger('especialidad_id'); 

                // Definición de clave foránea
                $table->foreign('especialidad_id')
                      ->references('id')
                      ->on('especialidades')
                      ->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mecanicos');
    }
};
