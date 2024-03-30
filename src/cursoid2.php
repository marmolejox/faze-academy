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

$db = new Database();

$sql = "SELECT * FROM cursos WHERE id=2";
$query = $db->connect()->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

if ($query->rowCount() > 0) {
    foreach ($results as $result) {

        $courseName = $result->nombre;
        $teacherName = $result->profesor;
        $duringTime = $result->horas;
        $level = $result->nivel;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $courseName ?></title>
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
                    <a href="logout.php" type="button" id="cerrarsesion" class="btn btn-danger">Cerrar Sesion</a>
                </div>
            </form>
        </div>
    </div>
</nav>

<body>

    <header>
        <div class="container-fluid bg-light" id="intro">
            <br>
            <br>
            <h1 class="text-center"><img src="./img/LogoFaze.svg" height="50px"></h1>
            <br>
            <br>
        </div>
    </header>

    <br>

    <main>

        <div class="container">

            <h1><?php echo $courseName; ?></h1>

            <p>Impartido por: <?php echo $teacherName; ?></p>
            <p>Duración: <?php echo $duringTime; ?> horas.</p>
            <p>Nivel: <?php echo $level; ?></p>


            <h2>Contenidos: </h2>

            <ol class="list-group list-group-numbered">
                <li class="list-group-item">Biblotecas <span class="badge bg-primary rounded-pill">Lección</span></li>
                <li class="list-group-item">Sintaxis <span class="badge bg-primary rounded-pill">Lección</span></li>
                <li class="list-group-item">Ejemplo <span class="badge bg-primary rounded-pill">Ejemplo</span></li>
                <li class="list-group-item">Teoria <span class="badge bg-primary rounded-pill">Finalización</span></li>
            </ol>

            <br>

            <h2>Lección 1.</h2>
            <h3>Biblotecas en C</h3>

            <br>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="ax|ccordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Biblotecas en C
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Al hablar de bibliotecas en lenguaje C nos referimos a una serie de librerías que son usadas en este lenguaje de programación y están formadas por una serie de código con el que podemos leer el teclado, realizar operaciones matemáticas, imprimir en pantalla… La biblioteca referente es la estándar de ANSI C formada por 24 archivos de cabecera. Según su tarea, se clasifican en categorías, como por ejemplo matemáticas, de salida y entrada, de uso de textos, de gestión de memoria...
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Conocidas
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Entre las librerías más destacadas encontramos stdio.h (de entrada y salida), conio.h (potente gestión de textos), math.h (encargada de operaciones matemáticas), time.h (obtienen fecha y hora actual para poder utilizarla según sus necesidades), etcétera.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Estructura
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        En estos momentos, podemos concluir que el lenguaje de programación C es el idóneo para programar sistemas operativos debido a su cercanía en el lenguaje, al igual que cumple con creces en la creación de programas de otra índole y ofrece a los programadores un control total sobre la memoria pudiendo asignarla cómo, cuándo y dónde quieran. Otro punto a destacar es la gran variedad de bibliotecas (como las estándar ASCI) que facilitan mucho al programador la redacción de las acciones a realizar.
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <input type="checkbox" id="lesson1"> <label for="lesson1">Terminé la primer lección.</label>

            <hr>

            <h2>Lección 2.</h2>
            <h3>Sintaxis</h3>

            <p>Todos los programas que son creados tienen un diferentes tipos de formato. Este formato es conocido como la sintaxis. La sintaxis en C es una serie de reglas y procesos que lideran la estructura de un programa. Estas reglas tienen que ser entendidas por el compilador para que se pueda crear un programa en C válido, es decir, tienen que establecer cómo comienza una línea de código en C, cómo termina o cuándo usar, por ejemplo, comillas o llaves. El lenguaje en C hace distinción entre mayúsculas y minúsculas siendo este el motivo por el que se programa en minúsculas.

La sintaxis básica en C determina la forma en que se agrupan los caracteres para formar tokens, que son la unidad mínima de programación en C. Tomando como ejemplo el programa “Hola Mundo”, usado para la introducción a la mayoría de lenguajes de programación, tendríamos el siguiente código en C:</p>


            <input type="checkbox" id="lesson2"> <label for="lesson2"> Terminé la segunda lección.</label>

            <hr>

            <h2>Lección 3.</h2>
            <h3>Ejemplo</h3>

            <section>

            <code>

            1   /*Hello World*/<br>2<br>
            3   #include<br>
            4   int main() {<br>
            5      printf("Hello World");<br> 
            6   return 0;<br>
            7  }<br>

            </code>

            <br>

            <samp>Output = Hello World</samp>

            </section>

            <input type="checkbox" id="lesson3"> <label for="lesson3">Terminé la tercera lección.</label>

            <hr>

            <h2>Lección 4.</h2>
            <h3>Teoria</h3>

            <samp>El comienzo de todo programa en este lenguaje debe comenzar por #include cuya función es inicializar el entorno de trabajo; en nuestro ejemplo, vinculando el archivo stdio.h (biblioteca de C) que a su vez contiene la orden printf. 

La función en lenguaje C int main() hace que el programa vuelva a ese punto de retorno tras ejecutarse y su orden está delimitada entre {}.

Cómo en la mayoría de los lenguajes de programación, nos podemos ayudar de comentarios que el compilador no procesará pero que nos serán de mucha utilidad a la hora de aclarar cualquier concepto en la línea de código. Podemos hacer los comentarios en lenguaje C de dos maneras; una única línea de comentario comenzando con // o en múltiples líneas comenzando y terminando por /*.<br>
                <br>
    <input type="checkbox" id="lesson4"> <label for="lesson4">Terminé la cuarta lección.</label>

            <hr>

            <input class="btn btn-danger" type="button" id="finish" value="Terminé el curso.">
            <a href="datosfacturacion.php" class="btn btn-secondary" id="refund">Quiero un reembolso.</a>


        </div>

    </main>

    <script src="main.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



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