<?php
$email = "nomas@prueba.com";

echo "El correo electronico: <strong>$email</strong> <br>";

$regex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

$preg = preg_match($regex, $email);

$valido = $preg ? "Valido" : "No es Valido";

echo "Es $valido <br>";

$nombre = substr($email, 0, strpos($email,"@"));

echo "El nombre de usuario es: <strong>$nombre</strong>";
