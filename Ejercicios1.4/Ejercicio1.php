<?php
$papas = 16;
$descuento = 0.5;

echo "Tipo de Variables: <br>";
echo gettype($papas), "<br>";
echo gettype($descuento), "<br>";

function precioTotal(int $producto, float $descuento){
    $resultado = $producto * $descuento;
    echo $resultado;
}

echo "<br> Calcular descuento: <br>";
echo "Producto: $papas <br>";
echo "Descuento: $descuento <br>";

echo "Descuento total: <br>";
echo precioTotal($papas, $descuento);
