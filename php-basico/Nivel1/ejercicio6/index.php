<?php

// Función para determinar si Charlie muerde o no
function isBitten() {
    
    $randomNumber = rand(0, 1); 

   
    if ($randomNumber == 0) {
        echo "Charlie te muerde";
    } else {
        echo "No te muerde";
    }
}

// Llamar a la función
isBitten();

?>
