<?php


session_start();

require 'database.php';

if (!isset($_SESSION['rol'])) {
    header('location: login.php');
} else {
    if ($_SESSION['rol'] != 3) {
        header('location: login.php');
    }
}

if (isset($_POST['nombre']) && isset($_POST['ncurso']) && isset($_POST['tarjeta'])) {

    $nombre = $_POST['nombre'];
    $ncurso = $_POST['ncurso'];
    $tarjeta = $_POST['tarjeta'];
    $id = rand(5, 15);

    $db = new Database();

    $query = $db->connect()->prepare('INSERT INTO facturas VALUES (:id,:nombre,:tarjeta,:ncurso)');

    $query->bindParam(':id', $id, PDO::PARAM_STR, 25);
    $query->bindParam(':nombre', $nombre, PDO::PARAM_STR, 25);
    $query->bindParam(':tarjeta', $tarjeta, PDO::PARAM_STR, 25);
    $query->bindParam(':ncurso', $ncurso, PDO::PARAM_STR, 25);

    if ($query->execute()) {
        PRINT <<<HERE
        <div class="alert alert-success" role="alert">¡Tu reembolso se verá reflejado de 3 - 5 días!</div>
        HERE;
    }else{
        PRINT <<<HERE
        <div class="alert alert-danger" role="alert">¡Error, algo salió mal!</div>
        HERE;
    }

}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reembolso</title>
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
                </ul>
                <form class="d-inline-flex justify-content-end">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="logout.php" type="button" id="signup" class="btn btn-outline-danger">Cerrar Sesion</a>
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
            <h1 class="text-center">Reembolso de <br><img src="./img/LogoFaze.svg" height="50px"></h1>
            <br>
            <h3 class="text-center">Lamentamos que no haya sido de tu agrado, con gusto devolveremos tu dinero.</h3>
            <br>
            <br>
        </div>
    </header>

    <br>

    <!-- Main - Faze -->

    <main class="container">

    <h1><i class="fas fa-money-check"></i> Datos de facturación.</h1>
    <br>

    <h1></h1>

    <form action="" method="POST" class="datos_curso">
        <label for="exampleFormControlInput1" class="form-label">Ingresa tu nombre completo:</label>
        <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Ingresa tu nombre" required><br />
        <label for="exampleFormControlInput1" class="form-label">Ingrese su numero de tarjeta:</label>
        <input type="password" class="form-control" name="tarjeta" id="exampleFormControlInput1" placeholder="Tarjeta para devolución" required><br />
        <label for="exampleFormControlInput1" class="form-label">Nombre del curso insatisfecho: </label>
        <input type="text" class="form-control" name="ncurso" id="exampleFormControlInput1" placeholder="Ingrese el nombre del curso" required><br />
        <input type="submit" class="btn btn-outline-danger" value="Reembolsar">
        <a href="index.php" class="btn btn-outline-danger">Cancelar</a>

    </main>


    <!-- Footer - Copyright Hyperion -->

    <br>
    <br>
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