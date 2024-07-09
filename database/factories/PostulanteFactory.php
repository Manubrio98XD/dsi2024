<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postulante>
 */
class PostulanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni' => $this->faker->unique()->numerify('########'),
            'fechaemision' => $this->faker->date(),
            'nombres' => $this->faker->firstName,
            'apellido_materno' => $this->faker->lastName,
            'apellido_paterno' => $this->faker->lastName,
            'fecha_nac' => $this->faker->date(),
            'region' => $this->faker->state,
            'provincia' => $this->faker->city,
            'distrito' => $this->faker->city,
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'direccion' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'foto' => $this->faker->imageUrl(600, 600, 'people'),
            'fotodni_pdf' => $this->faker->text,
            'celular' => $this->faker->numerify('#########'), 
            'colegio_egresado' => $this->faker->company,
            'año_egreso' => $this->faker->year,
            'carrera' => $this->faker->randomElement([
                'desarrollo de sistemas de informacion', 
                'turismo', 
                'enfermeria', 
                'mecatronica', 
                'electricidad', 
                'industrial', 
                'administracion hotelera', 
                'contabilidad', 
                'laboratorio clinico y patologica', 
                'electronica', 
                'mecanica de produccion'
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
