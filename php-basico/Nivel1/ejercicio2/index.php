<?php
$mensaje = "Hello World";  
echo $mensaje . "<br>";  

$mensaje_mayusculas = strtoupper($mensaje);
echo $mensaje_mayusculas . "<br>";


$tamano = strlen($mensaje);
echo "La longitud del mensaje es: $tamano caracteres <br>";


$mensaje_invertido = strrev($mensaje);
echo "Mensaje invertido: $mensaje_invertido <br>";

$mensaje2 = " Este es el curso de PHP";
$mensaje_concatenado = $mensaje . $mensaje2;
echo "Concatenación: $mensaje_concatenado <br>";
?>
