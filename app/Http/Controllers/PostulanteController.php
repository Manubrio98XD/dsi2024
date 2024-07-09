<?php

namespace App\Http\Controllers;

use App\Models\Postulante;
use App\Models\SolicitudPostulante;
use App\Models\DetallePostulante;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class PostulanteController extends Controller
{
    public function index()
    {
        $postulantes = Postulante::all(); 

        return view('postulantes.index', compact('postulantes'));
    }

    public function create()
    {
       
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'dni' => 'required|string|max:8',
            'fechaemision' => 'required|date',
            'nombres' => 'required|string|max:50',
            'apellido_materno' => 'required|string|max:50',
            'apellido_paterno' => 'required|string|max:50',
            'fecha_nac' => 'required|date',
            'region' => 'required|string|max:50',
            'provincia' => 'required|string|max:50',
            'distrito' => 'required|string|max:50',
            'sexo' => 'required|in:M,F',
            'direccion' => 'required|string|max:100',
            'email' => 'required|string|email|max:100',
            'celular' => 'required|string|max:9',
            'foto' => 'required|image|max:2048', 
            'fotodni_pdf' => 'required|file|mimes:pdf|max:2048', 
            'colegio_egresado' => 'required|string|max:50',
            'año_egreso' => 'required|integer',
            'carrera' => [
                'required',
                Rule::in([
                    'desarrollo de sistemas de informacion',
                    'turismo',
                    'enfermeria',
                    'mecatronica',
                    'electricidad industrial',
                    'administracion hotelera',
                    'contabilidad',
                    'laboratorio clinico y patologica',
                    'electronica',
                    'mecanica de produccion'
                ]),
            ],
        ], [
            'dni.required' => 'El DNI es obligatorio.',
            'dni.max' => 'El DNI no debe superar los 8 caracteres.',
            'fechaemision.required' => 'La fecha de emisión es obligatoria.',
            'fechaemision.date' => 'La fecha de emisión debe ser una fecha válida.',
            'nombres.required' => 'El nombre es obligatorio.',
            'apellido_materno.required' => 'El apellido materno es obligatorio.',
            'apellido_paterno.required' => 'El apellido paterno es obligatorio.',
            'fecha_nac.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nac.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'region.required' => 'La región es obligatoria.',
            'provincia.required' => 'La provincia es obligatoria.',
            'distrito.required' => 'El distrito es obligatorio.',
            'sexo.required' => 'El sexo es obligatorio.',
            'sexo.in' => 'El sexo debe ser M o F.',
            'direccion.required' => 'La dirección es obligatoria.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe ser una dirección válida.',
            'celular.required' => 'El celular es obligatorio.',
            'celular.max' => 'El celular no debe superar los 9 caracteres.',
            'foto.required' => 'La foto es obligatoria.',
            'foto.image' => 'La foto debe ser una imagen.',
            'foto.max' => 'La foto no debe superar los 2048 KB.',
            'fotodni_pdf.required' => 'El PDF del DNI es obligatorio.',
            'fotodni_pdf.file' => 'El PDF del DNI debe ser un archivo.',
            'fotodni_pdf.mimes' => 'El PDF del DNI debe ser un archivo de tipo: pdf.',
            'fotodni_pdf.max' => 'El PDF del DNI no debe superar los 2048 KB.',
            'colegio_egresado.required' => 'El colegio egresado es obligatorio.',
            'año_egreso.required' => 'El año de egreso es obligatorio.',
            'año_egreso.integer' => 'El año de egreso debe ser un número entero.',
            'carrera.required' => 'La carrera es obligatoria.',
            'carrera.in' => 'La carrera seleccionada no es válida.',
        ]);

        $fotoPath = $request->file('foto')->store('fotos', 'public');
        $fotodniPdfPath = $request->file('fotodni_pdf')->store('fotodni_pdfs', 'public');

        $postulante = new Postulante([
            'dni' => $validatedData['dni'],
            'fechaemision' => $validatedData['fechaemision'],
            'nombres' => $validatedData['nombres'],
            'apellido_materno' => $validatedData['apellido_materno'],
            'apellido_paterno' => $validatedData['apellido_paterno'],
            'fecha_nac' => $validatedData['fecha_nac'],
            'region' => $validatedData['region'],
            'provincia' => $validatedData['provincia'],
            'distrito' => $validatedData['distrito'],
            'sexo' => $validatedData['sexo'],
            'direccion' => $validatedData['direccion'],
            'email' => $validatedData['email'],
            'foto' => $fotoPath,
            'fotodni_pdf' => $fotodniPdfPath,
            'celular' => $validatedData['celular'],
            'colegio_egresado' => $validatedData['colegio_egresado'],
            'año_egreso' => $validatedData['año_egreso'],
            'carrera' => $validatedData['carrera'],
        ]);

        $postulante->save();

        $postulante->solicitudPostulante()->create([
            'fecha_presentacion' => now(),
            'estado' => 'pendiente',
        ]);

        $postulante->detallePostulante()->create([]);

        return view('confirmacion', compact('postulante'));
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
       
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
    $postulante = Postulante::findOrFail($id);

    SolicitudPostulante::where('id_postulante', $id)->delete();

    DetallePostulante::where('id_postulante', $id)->delete();

    $postulante->delete();

    return redirect()->route('postulantes.index')->with('success', 'Postulante y sus registros asociados eliminados correctamente');
    }

    public function consulta(Request $request)
    {
        $dni = $request->input('dni');
        $postulante = Postulante::with(['solicitudPostulante', 'detallePostulante'])
                                ->where('dni', $dni)
                                ->first();

        return view('consulta', compact('postulante', 'dni'));
    }
    
}
