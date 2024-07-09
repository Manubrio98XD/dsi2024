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
        Schema::create('solicitud_postulantes', function (Blueprint $table) {
            $table->id('id_solicitud');    
            $table->unsignedBigInteger('id_postulante');
            $table->foreign('id_postulante')->references('id_postulante')->on('postulantes');    
            $table->date('fecha_presentacion');
            $table->enum('estado', ['pendiente', 'rechazado', 'aceptado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_postulantes');
    }
};
