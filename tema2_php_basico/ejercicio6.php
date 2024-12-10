<?php

// Función para determinar si Charlie muerde o no
function isBitten() {
    
    $randombool = rand(true, false); 

   
    if ($randombool == true) {
        echo "Charlie te muerde";
    } else {
        echo "No te muerde";
    }
}

// Llamar a la función
isBitten();

?>
