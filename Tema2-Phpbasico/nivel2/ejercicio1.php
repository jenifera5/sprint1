<?php

function llamadaTelefonica(int $min ){

    if($min<=3){
    
  return "tiene un coste extra de 10 centimos";

    }elseif($min>3){
   $minextra = $min-3;
    $costo = 0.10 + ($minextra*0.05);
   return "El costo adicional sera : " .$costo ."€";
    }

}


echo llamadaTelefonica(3)."<br>";

echo llamadaTelefonica(40)."<br>";
?>