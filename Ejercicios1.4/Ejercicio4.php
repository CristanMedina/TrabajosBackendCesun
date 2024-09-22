<?php
$a = 14;
$b = 7;

function aritmeticas(int $a, int $b) {
    echo "$a + $b = ", $a + $b, "<br>";
    echo "$a - $b = ", $a - $b, "<br>";
    echo "$a * $b = ", $a * $b, "<br>";
    echo "$a / $b = ", $a / $b, "<br>";
}

function comparacion(int $a, int $b) {
    echo "$a > $b: ", $a > $b ? "Verdadero" : "Falso", "<br>";
    echo "$a < $b: ", $a < $b ? "Verdadero" : "Falso", "<br>";
    echo "$a >= $b: ", $a >= $b ? "Verdadero" : "Falso", "<br>";
    echo "$a <= $b: ", $a <= $b ? "Verdadero" : "Falso", "<br>";
    echo "$a == $b: ", $a == $b ? "Verdadero" : "Falso", "<br>";
    echo "$a != $b: ", $a != $b ? "Verdadero" : "Falso", "<br>";
}

function logica(int $a, int $b) {
    echo "$a > $b y Par ", $a > $b && $a % 2 == 0 ? "Verdadero" : "Falso", "<br>";
    echo "$a > $b o Par ", $a > $b || $a % 2 == 0 ? "Verdadero" : "Falso", "<br>";
    echo "$a != $b ", $a != $b ? "Verdadero" : "Falso", "<br>";
}

echo "Operaciones aritmeticas: ", "<br>";
echo aritmeticas($a, $b);

echo "Operaciones de comparación: ", "<br>";
echo comparacion($a, $b);

echo "Operadores logicos: ", "<br>";
echo logica($a, $b);
