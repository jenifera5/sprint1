<?php
$n=20;
$numeros=[];

for ($i=2; $i<=$n ; $i++) { 
     $numeros[$i]=true;
    }

    for ($i=2; $i<=$n ; $i++) { 
    if (isset($numeros[$i])&& $numeros[$i]===true){
        for ($j=$i*2; $j<=$n ; $j+=$i) { 
           unset($numeros[$j]);
         
        }
    };
 }

  foreach ($numeros as $num => $primos) {
           echo $num . "<br>";
           }


?>