<?php 

 abstract class Animal{

protected $nombre;

abstract function makeSound();


function __construct($nombre){
$this->nombre=$nombre;

}







}



?>