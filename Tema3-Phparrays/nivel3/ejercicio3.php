<?php 
function esPrimo($num ) :bool{
if ($num <2)return false;

for ($i=2; $i <$num ; $i++) { 
  if ($num%$i===0) return false ;
}
 return true;
}

$numeros=array(2,3,5,6,8,9);
$sumaPrimos=array_reduce($numeros, function($acumulador,$num){
    return esPrimo($num)?$acumulador + $num :$acumulador;
},0);
echo "Suma de primos: ". $sumaPrimos;
?>