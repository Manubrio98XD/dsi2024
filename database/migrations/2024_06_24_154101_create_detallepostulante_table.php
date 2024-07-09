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
        Schema::create('detalle_postulantes', function (Blueprint $table) {
            $table->id('id_detalle_postulante');
            $table->unsignedBigInteger('id_postulante');
            $table->foreign('id_postulante')->references('id_postulante')->on('postulantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_postulantes');
    }
};
