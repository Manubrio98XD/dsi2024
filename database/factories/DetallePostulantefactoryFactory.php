<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DetallePostulante;
use App\Models\postulante;
use App\Models\Carrera;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DetallePostulantefactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'id_postulante' => Postulante::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
