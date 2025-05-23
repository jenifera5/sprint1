<?php
$X=10;
$Y=2;
$N=5.5;
$M=2.5;

//Operaciones de X y Y
echo "Suma: " . ($X + $Y) ."<br>";
echo "Resta:"  . ($X - $Y) . "<br>";
echo "multiplicacion: " . ($X * $Y) ."<br>";
echo "modulo: " .($X % $Y) ."<br>";

//Operaciones de N y M
echo "Suma:" . ($N + $M) ."<br>";
echo "Resta:" . ($N - $M) . "<br>";
echo "multiplicacion:" . ($N * $M)."<br>";

//Operaciones en todas la varibles
echo "Doble de la variable X: " . (2 * $X) ."<br>";
echo "Doble de la variable Y: " . (2 * $Y)."<br>";
echo "Doble de la variable N: " . (2 * $N)  ."<br>";
echo "Doble de la variable M: " . (2 * $M)  ."<br>";
echo "Suma total: ". ($X + $Y + $N + $M)."<br>" ;
echo "Producto total: ". ($X * $Y * $N * $M) ;

?>