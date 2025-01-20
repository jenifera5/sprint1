<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenar numeros</title>
</head><body>
    <h2>Ingresa los numero para hacer una suma:</h2>
    <form action="ejercicio2.php" method="POST">
        <label for="numero1">ingresa el primer numero: </label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="numero2">ingresa el segundo numero: </label>
        <input type="number" id="numero2" name="numero2" required>
        <label for="numero3">ingresa el tercer numero: </label>
        <input type="number" id="numero3" name="numero3" required>
        <br><br>
        <input type="submit" value="ordenar">
    </form>

<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $num1=$_POST['numero1'];
    $num2=$_POST['numero2']; 
    $num3=$_POST['numero3']; 

// Crear un array con los números
$numeros = array($num1, $num2, $num3);
    
// Ordenar el array en orden ascendente
sort($numeros);

// Mostrar los números ordenados
echo "<h3>Números ordenados: " . implode(", ", $numeros) . "</h3>";

echo "Números ordenados: " . implode(", ", $numeros);
//implode() para mostrar los números ordenados: Usé la función implode() para convertir el array de números ordenados en una cadena separada por comas y mostrarlo de forma legible.
 // Mostrar información usando constantes mágicas
 echo "<p>Este código se encuentra en el archivo: <strong>" . __FILE__ . "</strong></p>";
 echo "<p>El directorio actual es: <strong>" . __DIR__ . "</strong></p>";
 echo "<p>La línea de este mensaje es: <strong>" . __LINE__ . "</strong></p>";
}
//__FILE__:
//Devuelve la ruta completa y el nombre del archivo donde se encuentra el código. puede ser util para identificar en qué archivo se ejecuta un script.

//__DIR__:
//Devuelve el directorio del archivo actual. Es útil para ubicar archivos relacionados dentro de un proyecto.

//__LINE__:
//Devuelve el número de línea donde se encuentra en el código.


?>                                                                                  

</body>
</html>