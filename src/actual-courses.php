<?php


session_start();

require 'database.php';

if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1:
            header('location: admin.php');
            break;

        case 2:
            header('location: colab.php');
            break;

        case 3:
            header('location: alumno.php');

        default:
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faze</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/favicon.png">

    <!-- Iconos -->

    <script src="https://kit.fontawesome.com/2c026981fb.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <!-- Navigation - Faze -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a href="./index.php" class="navbar-brand"><img src="./img/LogoFaze.svg" width="150px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="buscar.php">Buscar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="actual-courses.php">Cursos disponibles</a>
                    </li>
                </ul>
                <form class="d-inline-flex justify-content-end">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="login.php" type="button" id="login" class="btn btn-danger">Login</a>
                        <a href="signup.php" type="button" id="signup" class="btn btn-outline-danger">Signup</a>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <!-- Header - Faze -->

    <header>
        <div class="container-fluid bg-light" id="intro">
            <br>
            <br>
            <h1 class="text-center">Cursos disponibles en<br><img src="./img/LogoFaze.svg" height="50px"></h1>
            <br>
            <br>
        </div>
    </header>

    <!-- Main - Faze -->

    <main class="container text-center">

    <div class="row">
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="./img/c.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Programacion en C</h5>
                            <p class="card-text">Prof. Tiago Grijalva Flores Principiante</p>
                            <a href="login.php" class="btn btn-primary">¡Aprender!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="./img/c2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Programacion en C</h5>
                            <p class="card-text">Prof. Eduardo Gutierrez Marmolejo Avanzado</p>
                            <a href="login.php" class="btn btn-primary">¡Aprender!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="./img/go.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Programacion en Go</h5>
                            <p class="card-text">Prof. Sebastian Grijalva Flores Avanzado</p>
                            <a href="login.php" class="btn btn-primary">¡Aprender!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="./img/arduino.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Arduino</h5>
                            <p class="card-text">Prof. Eduardo Daniel Calvillo Avanzado</p>
                            <a href="login.php" class="btn btn-primary">¡Aprender!</a>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="./img/corte.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Costura y Confeccion</h5>
                            <p class="card-text">Prof. Hector Obett Gutierrez Avanzado</p>
                            <a href="login.php" class="btn btn-primary">¡Aprender!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="./img/flutter.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Flutter</h5>
                            <p class="card-text">Prof. Fernando Jose Herrera Intermedio</p>
                            <a href="login.php" class="btn btn-primary">¡Aprender!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="./img/ioswift.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">iOS y Swift 5.5</h5>
                            <p class="card-text">Prof. Juan Villalvazo <br>Avanzado</p>
                            <a href="login.php" class="btn btn-primary">¡Aprender!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="./img/api.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">API and Web Service Introduction</h5>
                            <p class="card-text">Prof. Nate Ross <br>Principiante</p>
                            <a href="login.php" class="btn btn-primary">¡Aprender!</a>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="./img/trading.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Trading Sin Indicadores</h5>
                            <p class="card-text">Prof. Jhonny Abanto Carrera Intermedio</p>
                            <a href="login.php" class="btn btn-primary">¡Aprender!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="./img/forex.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Como Invertir en Forex</h5>
                            <p class="card-text">Prof. Petko Zhivkov Aleksandrov Avanzado</p>
                            <a href="login.php" class="btn btn-primary">¡Aprender!</a>
                        </div>
                    </div>
                </div>
            </div>

    </main>


    <!-- Footer - Copyright Hyperion -->

    <footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4">

        <div class="col-md-4 d-flex align-items-center">
            <span class="text-muted">&copy; 2021 Faze</span>
        </div>

        <a href="https://www.uaa.mx" target="blank">
            <img src="./img/logo-uaa.png" width="80px">
        </a>


        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/liberumx" target="blank"><i id="fb" class="fab fa-facebook-square"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/liberummx/" target="blank"><i id="ig" class="fab fa-instagram-square"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/watch?v=LLYgfZblNjc" target="blank"><i id="yt" class="fab fa-youtube-square"></i></a></li>
        </ul>

    </footer>

    <!-- Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Scripts -->


</body>

</html>