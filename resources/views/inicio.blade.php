<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #FFFFFF;
            color: #00214b;
        }
        .navbar, .carousel-caption {
            background-color: #8B0000;
            color: #FFFFFF;
        }
        .navbar-brand, .nav-link, .carousel-caption h5 {
            color: #FFFFFF !important;
        }
        .btn-postulacion {
            background-color: #8700a9;
            color: #8B0000;
        }
        .btn-postulacion:hover .dropdown-menu {
            display: block;
        }
        .carousel-item img {
            width: 100%;
            height: 70vh;
            object-fit: cover;
        }
        footer {
            background-color: #00214b;
            color: #FFFFFF;
            padding: 10px 0;
        }
        .btn-login {
            background-color: #c4aa00;
            color: #8B0000;
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
                <li class="nav-item dropdown">
                    <a class="nav-link btn btn-postulacion dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        POSTULAR
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('postular') }}">Registrar Postulación</a>
                        <a class="dropdown-item" href="{{ route('consultax') }}">Consultar Solicitud</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link btn btn-login" href="{{ route('login') }}">ACCESO</a></li>
            </ul>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="inicioCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://istta.edu.pe/img/slider/istta3.jpg" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido al Instituto</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://istta.edu.pe/img/gallery/fotos%20istta/CAMPUS/CAMPUS%20(8).JPG" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Contamos con 10 programas de estudios de alta demanda</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://istta.edu.pe/img/gallery/fotos%20istta/CAMPUS/CAMPUS%20(5).JPG" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Instituto Licenciado</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#inicioCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#inicioCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Footer -->
    <footer class="text-center mt-4">
        <div class="container">
            <p>Instituto Superior Tecnológico Túpac Amaru</p>
            <p>Dirección: Av. Cusco 123, Cusco, Perú</p>
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
