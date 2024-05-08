<?php

require 'cifrado.php';

$texto = "Este es un mensaje de prueba para la encriptacion de datos";
$textoCifrado = cifrado($texto);

echo 'Datos cifrado: '. $textoCifrado . '<br>';

echo 'Datos decifrados:' . descifrar($textoCifrado);





