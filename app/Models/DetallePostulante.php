<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePostulante extends Model
{
    use HasFactory;

    protected $table = 'detalle_postulantes';
    protected $primaryKey = 'id_detalle_postulante';

    protected $fillable = [
        'id_postulante',
        'created_at',
    ];
}
