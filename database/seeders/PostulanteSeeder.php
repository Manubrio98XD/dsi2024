<?php

namespace Database\Seeders;

use App\Models\postulante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostulanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       postulante::factory(200)->create();
    }
}
