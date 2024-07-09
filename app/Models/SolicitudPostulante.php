<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudPostulante extends Model
{
    use HasFactory;

    protected $table = 'solicitud_postulantes';
    protected $primaryKey = 'id_solicitud';

    protected $fillable = [
        'id_postulante',
        'fecha_presentacion',
        'estado',
    ];

    public function postulante()
    {
        return $this->belongsTo(Postulante::class, 'id_postulante');
    }
}
