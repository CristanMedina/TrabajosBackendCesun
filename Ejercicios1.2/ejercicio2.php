<?php
/* CREE UNA VARIABLE GLOBAL PARA NO TENER QUE CAMBIARLO */
$num = 3;
/* CREE UNA FUNCION QUE USA UN OPERADOR MODULO */
function par_o_impar(int $num){
    if($num % 2) {
        echo "Numero impar";
    } else {
        echo "Numero Par";
    }
}
/* IMPRIME SI ES PAR O IMPAR CON LA VARIABLE GLOBAL */
echo "El $num es un: <br>";
echo par_o_impar($num);
