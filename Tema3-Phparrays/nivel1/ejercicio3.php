<?php 

function validarCaracter($palabras,$caracter){
foreach ($palabras as  $palabra) {
   if(stripos($palabra,$caracter)===false){
       return false;
   }
}
return true;
}

$palabras=array("Hola","Php","Html");
$caracter = "h";

echo validarCaracter($palabras, $caracter)? "true  " : "false "; 

$caracter= "l";
echo validarCaracter($palabras, $caracter)? "true " : "false " ; 

?>