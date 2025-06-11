<?php
require_once 'rectangulo.php';
require_once 'triangulo.php';

$rectangulo=new Rectangulo(5,10);
echo "El area del rectangulo es :".$rectangulo->area()."<br>";

$triangulo=new Triangulo(5,10);
echo"El área del triángulo es: ".$triangulo->area()."<br>";


?>
