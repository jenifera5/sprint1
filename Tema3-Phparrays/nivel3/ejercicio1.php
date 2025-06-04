<?php 

function cubo($n) :float{
return ($n*$n*$n);
}

$resultado=array(1,2,3,4,5);
print_r(array_map("cubo",$resultado));
?>