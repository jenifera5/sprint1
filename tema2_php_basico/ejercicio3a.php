<?php

$x = 3;  
$y = 2;  
$n = 0.5;  
$m = 1.5;  

// Operaciones con X e Y (Enteros)
echo "X = $x, Y = $y<br>";
echo "Suma (X + Y): " . ($x + $y) . "<br>";
echo "Resta (X - Y): " . ($x - $y) . "<br>";
echo "Producto (X * Y): " . ($x * $y) . "<br>";
echo "Módulo (Y % X): " . ($y % $x) . "<br>";

// Operaciones con N y M (Decimales)
echo "N = $n, M = $m<br>";
echo "Suma (N + M): " . ($n + $m) . "<br>";
echo "Resta (M - N): " . ($m - $n) . "<br>";
echo "Producto (N * M): " . ($n * $m) . "<br>";
echo "Módulo (M % N): " . fmod($m, $n) . "<br>";

// Doble de cada variable
echo "El doble de X: " . ($x * 2) . "<br>";
echo "El doble de Y: " . ($y * 2) . "<br>";
echo "El doble de N: " . ($n * 2) . "<br>";
echo "El doble de M: " . ($m * 2) . "<br>";

// Suma de todas las variables
$suma_total = $x + $y + $n + $m;
echo "La suma de todas las variables: " . $suma_total . "<br>";

// Producto de todas las variables
$producto_total = $x * $y * $n * $m;
echo "El producto de todas las variables: " . $producto_total . "<br>";
?>
