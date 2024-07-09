<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitudPostulante;
use App\Models\Postulante;
use App\Services\EmailService;

class SolicitudPostulanteController extends Controller
{
    /**
     * Mostrar una lista de las solicitudes.
     *
     */
    public function index()
    {
        $solicitudes = SolicitudPostulante::with('postulante')->get();
        return view('solicitudes.index', compact('solicitudes'));
    }

    /**
     * Mostrar el formulario para crear una nueva solicitud.
     *
     */
    public function create()
    {
        
    }

    /**
     * Guardar una nueva solicitud en la base de datos.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'postulante_id' => 'required',
            'estado' => 'required|in:pendiente,rechazado,aceptado',
        ]);

        SolicitudPostulante::create($request->all());

        return redirect()->route('solicitudes.index');
    }

    /**
     * Mostrar el formulario para editar una solicitud existente.
     *
     */
    public function edit(SolicitudPostulante $solicitude)
    {
        return view('solicitudes.edit', compact('solicitude'));

    }

    /**
     * Actualizar una solicitud existente en la base de datos.
     *
     */
    public function update(Request $request, SolicitudPostulante $solicitude)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,rechazado,aceptado',
        ]);
        $estadoAnterior = $solicitude->estado;
        $solicitude->estado = $request->estado;
        $solicitude->save();

        $solicitude->load('postulante');

        // Envío de correos electrónicos según el estado
    if ($estadoAnterior != $request->estado) {
        if ($request->estado == 'aceptado') {
            EmailService::enviarSolicitudAprobada($solicitude->postulante);
        } elseif ($request->estado == 'rechazado') {
            EmailService::enviarSolicitudRechazada($solicitude->postulante);
        }
    }

        return redirect()->route('solicitudes.index');
    }
    /**
     * Eliminar una solicitud de la base de datos.
     *
     */
    public function destroy(SolicitudPostulante $solicitud)
    {
       
    }
}
