<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="others/img/logo.png" type="image/x-icon">
    <title>Farmacia</title>
    <link rel="stylesheet" href="others/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="others/icons/css/all.css">
    <link rel="stylesheet" href="others/css/style.css">
</head>

<body style="background-color: #ccc;">
    <div id="cabezera">
        <div id="cabezerabootstrap">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <img src="others/img/logo.png" alt="logo" title="logo" style="height: 50px;" width="100px">
                    <a class="navbar-brand" href="index.php" style="margin-left:5px">Farmacia Name</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Categorias
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="#">Adulto Mayor</a></li>
                                    <li><a class="dropdown-item" href="#">Belleza</a></li>
                                    <li><a class="dropdown-item" href="#">Cuidado Personal</a></li>
                                    <li><a class="dropdown-item" href="#">Cuidado de cabello</a></li>
                                    <li><a class="dropdown-item" href="#">Dermocosmetica</a></li>
                                    <li><a class="dropdown-item" href="#">Nutricion</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Nosotros

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="view/doctores.php">Doctores

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Login
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li>
                                        <a class="dropdown-item" href="registro.php" style="padding-left: 10px;">
                                            <i class="fas fa-user-plus"></i>
                                            Registrarme
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="inicio.php" style="padding-left: 10px;">
                                            <i class="fas fa-user"></i>
                                            Inicar secci&oacuten</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div id="descuentos">
        <img src="others/img/dscto.jpg" class="img-fluid" alt="...">
    </div>
    <div id="carrusel">
        <div id="Indicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#Indicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#Indicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#Indicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#Indicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#Indicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#Indicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#Indicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="others/img/imagen1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="others/img/imagen2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="others/img/imagen3.gif" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="others/img/imagen1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="others/img/imagen2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="others/img/imagen3.gif" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="others/img/imagen1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#Indicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#Indicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="cajitas">
        <div id="cajitas1">
            <div id="cajitasin">
                <a href="">
                    <span>
                        <img style="width: 418px; height: 283px;" class = "img-fluid" src="others/img/3 (1).jpeg" alt="promocion" title="promocion">
                    </span>
                </a>
            </div>
            <div id="cajitasin">
                <a href="">
                    <span>
                        <img style="width: 418px; height: 283px;" class = "img-fluid" src="others/img/3 (4).jpeg" alt="promocion" title="promocion">
                    </span>
                </a>
            </div>
            <div id="cajitasin">
                <a href="">
                    <span>
                        <img style="width: 418px; height: 283px;" class = "img-fluid" src="others/img/3 (5).jpeg" alt="promocion" title="promocion">
                    </span>
                </a>
            </div>
        </div>
    </div>
    <footer id="footer" class="container-fluid bg-dark text-center text-lg-start">
        <div id="contenedor">
            <div>
            </div>
        </div>  
    </footer>
</body>

<head>
    <script type="text/javascript" src="others/bootstrap/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="others/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="others/icons/js/all.js"></script>
</head>

</html>