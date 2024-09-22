<?php
/* CREE DOS VARIABLES, UNA INT Y UN FLOAT. SE IMPRIMIRA EL TIPO DE VALOR QUE ES */
$a = 7;
echo "Tipo de dato A: ", gettype($a), "<br>";
$b = 1.5;
echo "Tipo de dato B: ", gettype($b), "<br>";
/* CREACION DE FUNCION CON LAS OPERACIONES SOLICITADAS */
function operaciones(int $a, float $b) {
    echo "Suma: ", $a + $b, "<br>";
    echo "Resta: ", $a - $b, "<br>";
    echo "Multiplicación: ", $a * $b, "<br>";
    echo "División: ", $a / $b, "<br>";
}

operaciones($a, $b);
