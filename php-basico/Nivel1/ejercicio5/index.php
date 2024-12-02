<?php
// Función para verificar el grado del estudiante
function verificarGrado($nota) {
    if ($nota >= 60) {
        echo "Primera División";
    } elseif ($nota >= 45 && $nota <= 59) {
        echo "Segunda División";
    } elseif ($nota >= 33 && $nota <= 44) {
        echo "Tercera División";
    } else {
        echo "Suspenso";
    }
}

// Ejemplo de uso de la función
$nota = 58;
verificarGrado($nota);  
?>