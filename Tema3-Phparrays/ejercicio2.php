<?php
$X = array (10, 20, 30, 40, 50,60);

unset($X[4]);

$X=array_values($X);

echo "Nuevo tamaño: " . count($X) ."<br>";

echo "Lista actualizada:"."<br>";
foreach ($X as  $index => $numero) {
  
    echo "numero ". $index ." :". $numero  ."<br>";
}



?>