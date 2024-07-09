<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Postulante</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #8B0000;
            color: #00214b;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .text-2xl {
            color: #c4aa00 !important;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            border: 1px solid #00214b;
            padding: 10px;
            border-radius: 5px;
            width: calc(100% - 120px);
        }
        button {
            background-color: #00214b;
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #c4aa00;
            color: #00214b;
        }
        .bg-white {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .mt-4 {
            margin-top: 16px;
        }
        .mb-4 {
            margin-bottom: 16px;
        }
        .p-4 {
            padding: 16px;
        }
        .rounded-lg {
            border-radius: 8px;
        }
        .shadow-md {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mx-auto mt-8">
        <a class="text-2xl font-bold mb-4"href="{{ route('inicio') }}">Consulta de Postulante</a>
        
        <form action="{{ route('postulantes.consulta') }}" method="GET" class="mb-4">
            <div class="flex items-center">
                <input type="text" name="dni" placeholder="Ingrese DNI" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('dni', $dni ?? '') }}">
                <button type="submit" class="ml-4">Buscar</button>
            </div>
        </form>

        @if(isset($postulante))
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-medium text-gray-900" >Detalles del Postulante</h3>
                <p><strong>DNI:</strong> {{ $postulante->dni }}</p>
                <p><strong>Nombre:</strong> {{ $postulante->nombres }} {{ $postulante->apellido_paterno }} {{ $postulante->apellido_materno }}</p>
                <p><strong>Email:</strong> {{ $postulante->email }}</p>
                <p><strong>Fecha de Nacimiento:</strong> {{ $postulante->fecha_nac }}</p>

                <h3 class="mt-4 text-lg font-medium text-gray-900">Solicitudes</h3>
                @if($postulante->solicitudPostulante->count() > 0)
                    @foreach($postulante->solicitudPostulante as $solicitud)
                        <p><strong>Fecha de Presentación:</strong> {{ $solicitud->fecha_presentacion }}</p>
                        <p><strong>Estado:</strong> {{ $solicitud->estado }}</p>
                    @endforeach
                @else
                    <p>No hay solicitudes registradas para este postulante.</p>
                @endif

                <h3 class="mt-4 text-lg font-medium text-gray-900">Detalles del Postulante</h3>
                @if($postulante->detallePostulante->count() > 0)
                    @foreach($postulante->detallePostulante as $detalle)
                        <p><strong>ID Detalle:</strong> {{ $detalle->id_detalle_postulante }}</p>
                        <p><strong>Fecha de Creación:</strong> {{ $detalle->created_at }}</p>
                    @endforeach
                @else
                    <p>No hay detalles registrados para este postulante.</p>
                @endif
            </div>
        @elseif(isset($dni))
            <div class="mt-6">
                <p>No se encontraron resultados para el DNI ingresado.</p>
            </div>
        @endif
    </div>
</body>
</html>
