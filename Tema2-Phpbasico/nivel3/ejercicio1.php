<?php


function cribaEratostenes(int $n){
$numeros = array_fill(2,$n-1,true);
for ($i=2; $i*$i<=$n ; $i++) { 
    if (isset($numeros[$i]) && $numeros[$i] === true){
        for ($j=$i*$i; $j<=$n ; $j+=$i) { 
           unset($numeros[$j]);
         
        }
    };
 }

  return array_keys($numeros);

}

$resultado = cribaEratostenes(20);
echo implode(", ", $resultado);



?>