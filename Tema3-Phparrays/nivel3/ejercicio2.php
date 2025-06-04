<?php 

function nombreEsPar($nombre) :float{
return strlen($nombre)%2===0;
}

$filtrados =array("Jose","Ana","Pedro");
print_r(array_filter($filtrados,"nombreEsPar"));
?>