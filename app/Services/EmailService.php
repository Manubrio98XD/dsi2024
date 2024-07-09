<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Models\Postulante;

class EmailService
{
    public static function enviarSolicitudAprobada(Postulante $postulante)
    {
        Mail::send('emails.solicitud-aprobada', ['postulante' => $postulante], function ($message) use ($postulante) {
            $message->to($postulante->email);
            $message->subject('Solicitud Aprobada');
        });
    }

    public static function enviarSolicitudRechazada(Postulante $postulante)
    {
        Mail::send('emails.solicitud-rechazada', ['postulante' => $postulante], function ($message) use ($postulante) {
            $message->to($postulante->email);
            $message->subject('Solicitud Rechazada');
        });
    }
}