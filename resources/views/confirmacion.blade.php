<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #00214b; /* Dark blue */
            color: #FFFFFF; /* White */
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #FFFFFF; /* White */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        h1 {
            color: #8B0000; /* Dark red */
        }
        .details {
            text-align: left;
            margin-top: 20px;
            color: #000000; /* Black */
        }
        .details p {
            margin: 5px 0; /* Espacio entre párrafos */
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #c4aa00; /* Yellow */
            color: #000000; /* White */
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #b38f00; /* Darker yellow */
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Registro Exitoso</h1>
        <div class="details">
            <p><strong>DNI:</strong> {{ $postulante->dni }}</p>
            <p><strong>Nombre Completo:</strong> {{ $postulante->nombres }} {{ $postulante->apellido_paterno }} {{ $postulante->apellido_materno }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $postulante->fecha_nac }}</p>
            <p><strong>Región:</strong> {{ $postulante->region }}</p>
            <p><strong>Provincia:</strong> {{ $postulante->provincia }}</p>
            <p><strong>Distrito:</strong> {{ $postulante->distrito }}</p>
            <p><strong>Sexo:</strong> {{ $postulante->sexo === 'M' ? 'Masculino' : 'Femenino' }}</p>
            <p><strong>Dirección:</strong> {{ $postulante->direccion }}</p>
            <p><strong>Email:</strong> {{ $postulante->email }}</p>
            <p><strong>Celular:</strong> {{ $postulante->celular }}</p>
            <p><strong>Colegio de Egreso:</strong> {{ $postulante->colegio_egresado }}</p>
            <p><strong>Año de Egreso:</strong> {{ $postulante->año_egreso }}</p>
            <p><strong>Carrera:</strong> {{ $postulante->carrera }}</p>
        </div>
        <a href="{{ route('inicio') }}" class="btn">Salir</a>
    </div>
</body>
</html>
