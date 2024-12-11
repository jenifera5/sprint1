<?php
$num = array(1, 4, 6, 11, 20);


echo "Tamaño del array antes de eliminar un elemento: " . count($num) . "<br>";


unset($num[2]); 


$num = array_values($num);  
echo "Tamaño del array después de eliminar un elemento y normalizar las claves: " . count($num) . "<br>";


echo "Contenido del array: ";
print_r($num);
?>
