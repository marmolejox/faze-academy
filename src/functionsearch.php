<?php
// include class
require('database.php');

$db = new Database();

$valueBuscar = $_POST['buscarValue'];

$busquedaCursos = $db->connect()->prepare("SELECT * FROM cursos WHERE nombre LIKE '%$valueBuscar%'");
$busquedaCursos->execute();
$arrCursos = $busquedaCursos->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/favicon.png">

    <!-- Iconos -->

    <script src="https://kit.fontawesome.com/2c026981fb.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

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
                        <a class="nav-link active" aria-current="page" href="buscar.php">Buscar</a>
                    </li>
                </ul>
                <form class="d-inline-flex justify-content-end">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="logout.php" type="button" id="cerrarsesion" class="btn btn-danger">Cerrar Sesion</a>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <!-- Navigation - Faze -->

    <!-- Header - Faze -->

    <header>
        <div class="container-fluid bg-light" id="intro">
            <br>
            <br>
            <h1 class="text-center">Contenido encontrado en <br><img src="./img/LogoFaze.svg" height="50px"></h1>
            <br>
            <br>
        </div>
    </header>

    <br>

    <!-- Main - Faze -->

    <main class="container">

    <table class="table table-bordered" id="tablas">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Profesor</th>
                <th>Nivel</th>
                <th>Horas</th>
                <th>Categorias</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrCursos as $reporteCursos) { ?>

                <tr>
                    <td><?php echo $reporteCursos['nombre'] ?></td>
                    <td><?php echo $reporteCursos['profesor'] ?></td>
                    <td><?php echo $reporteCursos['nivel'] ?></td>
                    <td><?php echo $reporteCursos['horas'] ?></td>
                    <td><?php echo $reporteCursos['categoria'] ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

    
    <a href="index.php" type="button" id="signup" class="btn btn-outline-danger">Volver</a>

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

    </footer>

    <!-- Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Scripts -->


</body>

</html>