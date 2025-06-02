<?php 

$enteros =array(0,2,4,5,6);
$floats= array(0,2.0,3.5,4.2);

$resultado= array_intersect($enteros,$floats);
echo "Intersección: ";
print_r($resultado);
echo "<br>";
$mezcla=(array_merge($enteros,$floats));
echo "Mezcla: ";
print_r($mezcla);
?>