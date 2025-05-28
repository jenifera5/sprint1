<?php

namespace App;

class VerificarGrado{

   function verificarGrado(int $nota){
   if($nota>= 60){
return"Estas en la primera division";
}elseif($nota >= 45 ){
return "Estas en la segunda division";
}elseif($nota >= 33 ){
return"Estas en la tercera division";
}else{
return"Has suspendido"; 
}

}



}

?>