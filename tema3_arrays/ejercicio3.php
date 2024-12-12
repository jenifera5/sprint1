<?php  
/* Primera versión usando un bucle `foreach` */
/*
function words($arr, $char) {
    // Iterar sobre cada palabra en el array
    foreach ($arr as $word) {
        // Verificar si el carácter especificado NO existe en la palabra
        // Usamos stripos, que busca la posición de la primera aparición del carácter ignorando mayúsculas y minúsculas
        if (stripos($word, $char) === false) {
            return false; // Si alguna palabra no contiene el carácter, la función retorna false inmediatamente.
        }
    }
    return true; // Si todas las palabras contienen el carácter, retorna true.
}

// Ejemplo de uso:
$words = ["hola", "Php", "Html"];
$char = "h";
echo words($words, $char) ? "true" : "false" . "<br>";  // Esto debería devolver true

$char = "l";
echo words($words, $char) ? "true" : "false" . "<br>";  // Esto debería devolver false
// stripos busca ese carácter dentro de cada palabra y determina si está presente o no.
// Tú decides el carácter con el parámetro $char.
*/
//////////////////////////////////////////////////////////////////////////

// Segunda versión usando `array_filter`
// En este método, usamos array_filter para filtrar las palabras que contienen el carácter especificado.

function words($arr, $char) {
    // Filtrar las palabras que contienen el carácter
    $filtered = array_filter($arr, function($word) use ($char) {
        // stripos busca el carácter en la palabra ignorando mayúsculas y minúsculas
        return stripos($word, $char) !== false; 
    });

    // Verifica si todas las palabras del array original pasaron el filtro
    return count($filtered) === count($arr);
}

// Ejemplo de uso:
$words = ["hola", "Php", "Html"];

$char = "h";
echo words($words, $char) ? "true" : "false"; // Esto debería devolver true
echo "<br>";

$char = "l";
echo words($words, $char) ? "true" : "false"; // Esto debería devolver false
?>

