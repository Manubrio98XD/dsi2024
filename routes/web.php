<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostulanteController;
use App\Http\Controllers\SolicitudPostulanteController;


// Rutas públicas
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/postular', function () {
    return view('postular');
})->name('postular');

Route::get('/confirmacion', function () {
    return view('confirmacion');
})->name('confirmacion');

Route::get('/consultax', function () {
    return view('consulta');
})->name('consultax');

// Ruta pública para la consulta de postulantes
Route::get('/consulta', [PostulanteController::class, 'consulta'])->name('postulantes.consulta');

// Ruta para almacenar postulantes
Route::post('/postular', [PostulanteController::class, 'store'])->name('postular.store');

// Rutas protegidas
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
  
Route::resource('postulantes', PostulanteController::class);
Route::resource('solicitudes', SolicitudPostulanteController::class);

});



