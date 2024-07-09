<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    use HasFactory;

    protected $table = 'postulantes';
    protected $primaryKey = 'id_postulante';

    protected $fillable = [
        'dni',
        'fechaemision',
        'nombres',
        'apellido_materno',
        'apellido_paterno',
        'fecha_nac',
        'region',
        'provincia',
        'distrito',
        'sexo',
        'direccion',
        'email',
        'foto',
        'fotodni_pdf',
        'celular',
        'colegio_egresado',
        'año_egreso',
        'carrera',
    ];

    public function solicitudPostulante()
    {
        return $this->hasMany(SolicitudPostulante::class, 'id_postulante', 'id_postulante');
    }

    public function detallePostulante()
    {
        return $this->hasMany(DetallePostulante::class, 'id_postulante', 'id_postulante');
    }
}
