<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postulación</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #00214b;
            background: url('https://istta.edu.pe/img/gallery/fotos%20istta/CAMPUS/CAMPUS%20(1).JPG');
        }
        .navbar, .footer {
            background-color: #00214b;
            color: #FFFFFF;
        }
        .form-container {
            background-color: rgba(139, 0, 0, 0.8); /* Color rojo oscuro con 80% de opacidad */
            color: #FFFFFF;
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
            position: relative;
        }
        .form-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            opacity: 0.2; /* Ajusta la opacidad según sea necesario */
            z-index: -1;
            border-radius: 10px; /* Mantener el borde redondeado */
        }
        .form-label {
            color: #FFFFFF;
        }
        .btn-submit {
            background-color: #8700a9;
            color: #FFFFFF;
        }
        .footer {
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ route('inicio') }}">Instituto Superior Público Túpac Amaru</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Programas</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <div class="form-background"></div> <!-- Fondo transparente -->
                    <h1 class="text-center">Formulario de Postulación</h1>
                    <!-- En la parte superior del formulario -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

                    <form action="{{ route('postular.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="text" class="form-control" id="dni" name="dni" maxlength="8" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fechaemision" class="form-label">Fecha de Emisión</label>
                                <input type="date" class="form-control" id="fechaemision" name="fechaemision" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombres" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" maxlength="50" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="apellido_materno" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fecha_nac" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="region" class="form-label">Región</label>
                                <input type="text" class="form-control" id="region" name="region" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="provincia" class="form-label">Provincia</label>
                                <input type="text" class="form-control" id="provincia" name="provincia" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="distrito" class="form-label">Distrito</label>
                                <input type="text" class="form-control" id="distrito" name="distrito" maxlength="50" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sexo" class="form-label">Sexo</label>
                                <select class="form-control" id="sexo" name="sexo" required>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" maxlength="100" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" maxlength="100" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" maxlength="9" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="foto" class="form-label">Foto 2MB</label>
                                <input type="file" class="form-control" id="foto" name="foto" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fotodni_pdf" class="form-label">Foto DNI (PDF) 2MB</label>
                                <input type="file" class="form-control" id="fotodni_pdf" name="fotodni_pdf" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="colegio_egresado" class="form-label">Colegio de Egreso</label>
                                <input type="text" class="form-control" id="colegio_egresado" name="colegio_egresado" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="año_egreso" class="form-label">Año de Egreso</label>
                                <input type="number" class="form-control" id="año_egreso" name="año_egreso" maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="carrera" class="form-label">Carrera</label>
                                <select class="form-control" id="carrera" name="carrera" required>
                                    <option value="desarrollo de sistemas de informacion">Desarrollo de Sistemas de Información</option>
                                    <option value="turismo">Turismo</option>
                                    <option value="enfermeria">Enfermería</option>
                                    <option value="mecatronica">Mecatrónica</option>
                                    <option value="electricidad industrial">Electricidad</option>
                                    <option value="administracion hotelera">Administración Hotelera</option>
                                    <option value="contabilidad">Contabilidad</option>
                                    <option value="laboratorio clinico y patologica">Laboratorio Clínico y Patológica</option>
                                    <option value="electronica">Electrónica</option>
                                    <option value="mecanica de produccion">Mecánica de Producción</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-submit btn-block">Enviar Postulación</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>Instituto Superior Tecnológico Túpac Amaru</p>
            <p>Dirección: Av. Ejemplo 123, Cusco, Perú</p>
            <p>Teléfono: +51 123 456 789</p>
            <p>Email: info@istta.edu.pe</p>
            <p>&copy; 2024 Instituto Superior Tecnológico Túpac Amaru. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
