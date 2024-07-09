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
        Schema::create('postulantes', function (Blueprint $table) {
            $table->id('id_postulante');
            $table->string('dni', 8)->unique();
            $table->date('fechaemision');
            $table->string('nombres', 50);
            $table->string('apellido_materno', 50);
            $table->string('apellido_paterno', 50);
            $table->date('fecha_nac');
            $table->string('region', 50);
            $table->string('provincia', 50);
            $table->string('distrito', 50);
            $table->enum('sexo', ['M', 'F']);
            $table->string('direccion', 100);
            $table->string('email', 100);
            $table->string('foto', 600);
            $table->mediumText('fotodni_pdf');
            $table->string('celular', 15);
            $table->string('colegio_egresado', 50);
            $table->integer('año_egreso');
            $table->string('carrera', 50);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulantes');
    }
};
