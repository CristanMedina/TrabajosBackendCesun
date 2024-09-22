<?php
/* CREE UNA VARIABLE GLOBAL */
$num = 10;
/* CREE UNA FUNCION LLAMADO FACTORIAL EN DONDE MULTIPLICARA TODOS LOS NUMEROS
    ANTES DE LLEGAR AL NUMERO DADO */
function factorial(int $value){
    $res = 1;

    for( $i = 1; $i <= $value; $i++ ){
        $res *= $i;
    }
    return $res;
}
echo "Factorial de numero:  $num<br>";
echo "Resultado: ", factorial($num);
