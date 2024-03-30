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
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="buscar.php">Buscar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="actual-courses.php">Cursos disponibles</a>
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
            <h1 class="text-center">Bienvenido a <br><img src="./img/LogoFaze.svg" height="50px"></h1>
            <h4 class="text-center">¡Estás a un paso de mejorar tu educación en el mejor sitio de aprendizaje en línea!</h4>
            <br>
            <br>
        </div>
    </header>

    <!-- Main - Faze -->

    <main class="container">

    <div class="container-fluid flex text-center">
            <br>
            <h3>Categorias Principales</h3>
            <br>
            <div class="row">
                <div class="col-sm">
                    <img style="filter: grayscale(100%);" class="rounded" src="./img/desarrollo.jpg" height="150px">
                    <h4><br>Desarrollo</h4>
                    <a href="actual-courses.php" class="btn btn-danger">Ver contenido</a>
                </div>
                <div class="col-sm">
                    <img style="filter: grayscale(100%);" class="rounded" src="./img/diseño.jpg" height="150px">
                    <h4><br>Diseño</h4>
                    <a href="actual-courses.php" class="btn btn-danger">Ver contenido</a>
                </div>
                <div class="col-sm">
                    <img style="filter: grayscale(100%);" class="rounded" src="./img/marketing.jpg" height="150px">
                    <h4><br>Marketing</h4>
                    <a href="actual-courses.php" class="btn btn-danger">Ver contenido</a>
                </div>
                <div class="col-sm">
                    <img style="filter: grayscale(100%);" class="rounded" src="./img/software.jpg" height="150px">
                    <h4><br>Informática y software</h4>
                    <a href="actual-courses.php" class="btn btn-danger">Ver contenido</a>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="./img/intro.jpg" height="320px">
                </div>
                <div class="col">
                    <br>
                    <br>
                    <br>
                    <p></p>
                    <p></p>
                    <h4>¿Te gustaría compartir tus conocimientos en <img src="./img/LogoFaze.svg" height="20px">?</h4>
                    <p>Registrate como profesor y sube tu curso con el contenido que más te guste.
                        <br>Instructores de todo el mundo enseñan a millones de estudiantes en Faze.
                        <br>Proporcionamos las herramientas y las habilidades,
                        <br>para que enseñes lo que te apasiona.
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="container-fluid flex text-center">
            <h3>Empresas de todos los tamaños confían en nosotros.</h3>
            <br>
            <div class="row">
                <div class="col-sm">
                    <br>
                    <img src="./img/spotify.png" width="40px">
                </div>
                <div class="col-sm">
                    <br>
                    <img style="filter: grayscale(100%);" src="./img/facebook-logo.png" width="280px">
                    <h1></h1>
                </div>
                <div class="col-sm">
                    <p></p>
                    <img src="./img/activision.svg" width="200px">
                    <h1></h1>
                </div>
                <div class="col-sm">
                    <p></p>
                    <img src="./img/apple.svg" width="40px">
                    <h1></h1>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <br>
                    <p></p>
                    <h4>Con <img src="./img/LogoFaze.svg" height="20px"> mejora tu sueldo.</h4>
                    <p>Estudía lo que siempre te ha detenido a desarrollar mejor
                        <br>todas tus habilidades. Los mejores cursos para ti sólo.
                        <br>Aprende y mejora tus habilidades empresariales,
                        <br>tecnológicas, de diseño y mucho más.
                    </p>
                </div>
                <div class="col">
                    <img src="./img/col2.jpg" height="220px">
                </div>
            </div>
        </div>
        <br>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="./img/col1.jpg" height="220px">
                </div>
                <div class="col">
                    <br>
                    <br>
                    <p></p>
                    <h4>Con <img src="./img/LogoFaze.svg" height="20px"> mejora tus calificaciones.</h4>
                    <p>¿Te gustaría ser el mejor estudiante de tu institución?
                        <br>¡Qué esperas! Con nuestros cursos exclusivos logra esa meta.
                        <br>Repasa temas con las tecnologías más actuales,
                        <br>realiza lecciones a tu tiempo y comodidad.
                    </p>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container text-center">
            <a href="signup.php" type="button" id="signup" class="btn btn-outline-danger text-center">¡Registrate ahora y comienza con tu aprendizaje!</a>
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