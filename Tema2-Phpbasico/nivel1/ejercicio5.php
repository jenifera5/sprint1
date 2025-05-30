<?php


function verificarGrado(int $nota){
   if($nota>= 60){
return"Estas en la primera division";
}elseif($nota >= 45 ){
return "Estas en la segunda division";
}elseif($nota >= 33 ){
return"Estas en la tercera division";
}else{
return"has suspendido"; 
}

}

echo verificarGrado(60) . "<br>";  
echo verificarGrado(50) . "<br>";  
echo verificarGrado(30) . "<br>";  


?>