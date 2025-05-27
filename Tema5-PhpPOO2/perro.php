<?php 
require_once 'animal.php';
 class Perro extends Animal{


function makeSound(){
    echo $this->nombre . " dice: ¡guau! ¡guau!"."<br>"; 
}



}





?>