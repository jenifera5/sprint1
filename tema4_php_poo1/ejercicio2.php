<?php
require_once 'rectangulo.php';
require_once 'triangulo.php';

$rectangulo = new Rectangulo(5, 10);
echo "Área del rectángulo: " . $rectangulo->area() . "<br>";

$triangulo = new Triangulo(5, 10);
echo "Área del triángulo: " . $triangulo->area() . "<br>";
?>

