<?php 
require_once 'animal.php';
require_once 'gato.php';
require_once 'perro.php';

$gato=new Gato("Charlie");
$gato->makeSound();

$perro=new Perro("Max");

$perro->makeSound();

?>