<?php
require_once 'Perro.php';
require_once 'Gato.php';


$perro = new Perro("Rex");
$gato = new Gato("Max");


$perro->makeSound(); 
$gato->makeSound();  
?>