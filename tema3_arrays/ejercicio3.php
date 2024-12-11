<?php  
function words($arr, $char) {
    // Iterar sobre cada palabra en el array
    foreach ($arr as $word) {
        if (stripos($word, $char) === false) {
            return false;  
        }
    }
    return true; 
}

// Ejemplo de uso:
$words = ["hola", "Php", "Html"];
$char = "h";
echo words($words, $char) ? "true" : "false" . "<br>";  // Esto debería devolver true

$char = "l";
echo words($words, $char) ? "true" : "false" . "<br>";  // Esto debería devolver false
?>
