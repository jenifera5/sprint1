<?php 
require_once 'animal.php';
 class Gato extends Animal{

function makeSound(){
 echo $this->nombre . " dice:¡miau! ¡miau!"."<br>";
}


}



?>