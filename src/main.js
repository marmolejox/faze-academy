//En este Javascript tenemos la funcionalidad apartir del progreso que se lleva en el curso permitir un reembolso o no.

var counter = 0;
var refund_availability = true;

//Funcion Checkbox

//Obtenemos los checkboxes.

var lesson1 = document.getElementById('lesson1');
var lesson2 = document.getElementById('lesson2');
var lesson3 = document.getElementById('lesson3');
var lesson4 = document.getElementById('lesson4');

    lesson1.addEventListener('change', function () {
        if (this.checked) {
            lesson1.disabled=true;
            counter++;
        }
    });

    lesson2.addEventListener('change', function () {
        if (this.checked) {
            lesson2.disabled=true;
            counter++;
        }
    });

    lesson3.addEventListener('change', function () {
        if (this.checked) {
            lesson3.disabled=true;
            counter++;
        }
    });

    lesson4.addEventListener('change', function () {
        if (this.checked) {
            lesson4.disabled=true;
            counter++;
        }
    });

//Funcion Finish
finish.onclick = function() {

    if(counter<4){
        alert("Te hacen falta por terminar lecciones.")
    }else{
        alert("Curso finalizado.");
    }

    
}


//Habilitar Reembolso
refund.onclick = function() {

    if(counter>=2){
        alert("Una vez avanzado el curso al 25% no puede ser reembolsado.");
    }

}