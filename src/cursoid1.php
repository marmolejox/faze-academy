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

$sql = "SELECT * FROM cursos WHERE id=1";
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
                <li class="list-group-item">¿Qué es? <span class="badge bg-primary rounded-pill">Lección</span></li>
                <li class="list-group-item">Definición <span class="badge bg-primary rounded-pill">Cuestionario</span></li>
                <li class="list-group-item">Ejemplo <span class="badge bg-primary rounded-pill">Ejemplo</span></li>
                <li class="list-group-item">Teoria <span class="badge bg-primary rounded-pill">Finalización</span></li>
            </ol>

            <br>

            <h2>Lección 1.</h2>
            <h3>¿Qué es?</h3>

            <br>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="ax|ccordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Lenguaje de Programación
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>C es un lenguaje de programación de propósito general.</strong> Originalmente desarrollado por Dennis Ritchie entre 1969 y 1972 en los Laboratorios Bell, como evolución del anterior <code>lenguaje B</code>, a su vez basado en BCPL.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Ventaja del lenguaje C
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>La programación en C tiene una gran facilidad para escribir código compacto y sencillo a su misma vez. </strong>En el lenguaje C no tenemos procedimientos como en otros lenguajes solamente tenemos funciones los procedimientos los simula y esta terminante mente prohibido escribir funciones , procedimientos y los comandos en mayúscula todo se escribe en minúsculas (a no ser las constantes J ) <code>Los archivos en la C se escriben en texto puro de ASCII</code> del Dos si se escribe en WORD por ejemplo el mismo incluye muchos códigos no entendidos por el compilador y generara errores ;una vez escrito se debe pasar a compilar el archivo; los archivos tienen 2 Extensiones archivo.C que es el archivo a compilar el que contiene todas los procedimientos funciones y código de nuestro programa y archivo.h que es las librerías que contienen las funciones de nuestro programa. (NOTA : El compilador genera Archivos con extensión .EXE). Cada instrucción que pasemos a poner en C va segida de un punto y coma para decirle al compilador que hasta ahí llega la instrucción simula un Enter del teclado. Ejemplo: clrscr(); /* borra la pantalla */
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
                            <strong>Es un lenguaje estructurado, </strong>ya que permite crear procedimientos en bloques dentro de otros procedimientos.
                            Hay que destacar que el C es un lenguaje portable, ya que permite utilizar el mismo código en diferentes equipos y sistemas informáticos:
                            El lenguaje es independiente de la arquitectura de cualquier máquina en particular.
                            Por último solo queda decir que el C es un lenguaje relativamente pequeño; se puede describir en poco espacio y aprender rápidamente.
                            Aunque en principio cualquier compilador de C es válido, se recomienda utilizar el compilador <code>Turbo C/C++, Dev C++ o bien el Borland C++.</code>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <input type="checkbox" id="lesson1"> <label for="lesson1">Terminé la primer lección.</label>

            <hr>

            <h2>Lección 2.</h2>
            <h3>Definición</h3>

            <br>

            <form action="" method="POST">
                    <span class="input-group-text" id="pregunta">Propósito del Lenguaje C</span>
                    <input type="text" class="form-control" placeholder="Respuesta" name="pregunta1">
                    <br>
                    <span class="input-group-text" id="pregunta">Creador del Lenguaje C</span>
                    <input type="text" class="form-control" placeholder="Respuesta" name="pregunta2">
                    <br>
                    <span class="input-group-text" id="pregunta">Estructura del Lenguaje C</span>
                    <input type="text" class="form-control" placeholder="Respuesta" name="pregunta3">
                    <br>
            </form>

            <input type="checkbox" id="lesson2"> <label for="lesson2"> Terminé la segunda lección.</label>

            <hr>

            <h2>Lección 3.</h2>
            <h3>Ejemplo</h3>

            <section>

            <code>

            1   /*Multiplica dos números enteros y muestra el resultado (utiliza definición múltiple de variables)*/<br>2<br>
            3   #include stdio.h<br>
            4   int main() {<br>
            5   int multiplicador, multiplicando; /*se definen 2 variables*/<br>
            6   multiplicador = 1000; /*se les asigna valor*/<br>
            7   multiplicando = 2;<br>
            8   printf("Resultado = %d", multiplicador*multiplicando);<br>
            9   /*se muestra el resultado por pantalla*/<br>
            10   return 0;<br>
            11  }<br>

            </code>

            <br>

            <samp>Resultado = 2000</samp>

            </section>

            <input type="checkbox" id="lesson3"> <label for="lesson3">Terminé la tercera lección.</label>

            <hr>

            <h2>Lección 4.</h2>
            <h3>Teoria</h3>

            <samp>Es un lenguaje muy versátil aunque tiene mucho tiempo de haber sido creado su economía sintáctica lo hacen de mucha ventaja para los programadores.</samp>
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