<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SolicitudPostulante;
use Illuminate\Support\Facades\DB;


class SolicitudPostulanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SolicitudPostulante::factory(200)->create();
    }
}
