<?php

// Función para determinar si Charlie muerde o no
function isBitten() {
    
    $random = rand(true, false); 

   
    if ($random == true) {
        echo "Charlie te muerde";
    } else {
        echo "No te muerde";
    }
}

// Llamar a la función
isBitten();

?>
