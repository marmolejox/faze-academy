<?php

include_once 'database.php';

session_start();

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

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['rol'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $id = 0;

    $db = new Database();

    $query = $db->connect()->prepare('INSERT INTO users VALUES (:id,:username,:password,:rol)');

    $query->bindParam(':id', $username, PDO::PARAM_STR, 25);
    $query->bindParam(':username', $username, PDO::PARAM_STR, 25);
    $query->bindParam(':password', $password, PDO::PARAM_STR, 25);
    $query->bindParam(':rol', $rol, PDO::PARAM_STR, 25);

    if ($query->execute()) {
        PRINT <<<HERE
        <div class="alert alert-success" role="alert">¡Registro realizado con éxito!</div>
        HERE;
    }else{
        PRINT <<<HERE
        <div class="alert alert-danger" role="alert">¡Error, algo salió mal!</div>
        HERE;
    }
    

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/favicon.png">

    <!-- Iconos -->

    <script src="https://kit.fontawesome.com/2c026981fb.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

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
                        <span class="input-group-text" id="basic-addon2">¿Ya tienes cuenta?</span>
                        <a href="login.php" type="button" id="signup" class="btn btn-outline-danger">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </nav>

<body>

<header>
        <div class="container-fluid bg-light" id="intro">
            <br>
            <h1 class="text-center">Registrate en <br><img src="./img/LogoFaze.svg" height="50px"></h1>
            <br>
        </div>
    </header>

    <div class="container">

    <h1>Registrarse</h1>

    <form action="#" method="POST">
        <label for="exampleFormControlInput1" class="form-label">Nombre de usuario:</label>
        <input type="text" class="form-control" name="username" id="exampleFormControlInput1" required placeholder="Ingrese el nombre de usuario"><br />
        <label for="exampleFormControlInput1" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" name="password" id="exampleFormControlInput1" required placeholder="Ingrese el nombre de usuario"><br />
        <label for="exampleFormControlInput1" class="form-label">Rol de usuario (2 - Profesor, 3 - Alumno):</label>
        <input type="text" class="form-control" name="rol" id="exampleFormControlInput1" pattern="[2-3]" required placeholder="Ingrese el rol de usuario"><br />
        <input type="submit" class="btn btn-outline-danger" value="Registrarse">
    </form>


    </div>


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




<!--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="#" method="POST">
        Username: <br /><input type="text" name="username"><br />
        Password: <br /><input type="text" name="password"><br />
        Rol: <br /><input type="text" name="rol" pattern="[2-3]"><br />
        <input type="submit" value="Registarte">
        <a href="login.php">Iniciar sesión</a>
    </form>
</body>

</html>-->