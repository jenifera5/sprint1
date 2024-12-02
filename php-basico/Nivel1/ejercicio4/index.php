<?php

function contarHasta($numero = 10, $incremento = 1) {
    
    if ($incremento <= 0) {
        echo "El incremento debe ser mayor que 0.";
        return;
    }
    
    
    for ($i = 1; $i <= $numero; $i += $incremento) {
        echo "Paso: $i<br>";
    }
}


echo "Contando hasta 10 de 1 en 1:<br>";
contarHasta(10, 1);


echo "<br>Contando hasta 20 de 2 en 2:<br>";
contarHasta(20, 2);


echo "<br>Contando hasta 15 de 3 en 3:<br>";
contarHasta(15, 3);


echo "<br>Contando hasta 10 de 5 en 5:<br>";
contarHasta(10, 5);


echo "<br>Contando hasta 10 con incremento negativo:<br>";
contarHasta(10, -1); 
?>
