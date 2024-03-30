<?php

ob_start();

// include class
require('database.php');

$db = new Database();
$busqueda = $db->connect()->prepare("SELECT * FROM users");
$busqueda->execute();
$arrDatos = $busqueda->fetchAll(PDO::FETCH_ASSOC);

$busquedaCursos = $db->connect()->prepare("SELECT * FROM cursos");
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
    </head>

<body>

    <!-- Navigation - Faze -->

    <!-- Header - Faze -->

    <header>
        <div class="container-fluid bg-light" id="intro">
            <br>
            <br>
            <h1 class="text-center">Reporte de Faze</h1>
            <br>
            <br>
        </div>
    </header>

    <br>

    <!-- Main - Faze -->

    <main class="container">

    <h1>Alumnos</h1>

    <table class="table table-bordered" id="tablas">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Contraseña</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrDatos as $reporteUsuarios) { ?>

                <tr>
                    <td><?php echo $reporteUsuarios['id'] ?></td>
                    <td><?php echo $reporteUsuarios['username'] ?></td>
                    <td><?php echo $reporteUsuarios['password'] ?></td>
                    <td><?php echo $reporteUsuarios['rol_id'] ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

    <br>

    <h1>Cursos</h1>

    <table class="table" id="tablas">
        <thead>
            <tr>
                <th>Id</th>
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
                    <td><?php echo $reporteCursos['id'] ?></td>
                    <td><?php echo $reporteCursos['nombre'] ?></td>
                    <td><?php echo $reporteCursos['profesor'] ?></td>
                    <td><?php echo $reporteCursos['nivel'] ?></td>
                    <td><?php echo $reporteCursos['horas'] ?></td>
                    <td><?php echo $reporteCursos['categoria'] ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

    </main>
</body>

</html>

<?php

$html=ob_get_clean();

require_once './dompdf/autoload.inc.php'; 

use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled'=>true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');

$dompdf->render();
$dompdf->stream("ReporteFaze", array("Attachment" => true));

?>