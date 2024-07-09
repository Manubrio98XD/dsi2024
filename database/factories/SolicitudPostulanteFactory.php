<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\informacion_academica;
use App\Models\SolicitudPostulante;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SolicitudPostulante>
 */
class SolicitudPostulanteFactory extends Factory
{
    /**
     * */

     protected $model = SolicitudPostulante::class;
     /** 
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'fecha_presentacion' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['pendiente', 'rechazado', 'aceptado']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
