<?php
/* CREE UNA FUNCION PARA SUMAR, DONDE TOMA DOS VALORES NUMERICOS Y LOS SUMA*/
function add(int $first_num, int $second_num){
    $result = $first_num + $second_num;
    echo $result;
}
/* IMPRIME EL RESULTADO EN LA PAGINA */
echo "Suma de dos numeros: <br>";
add(2,2);
