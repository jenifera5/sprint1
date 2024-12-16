<?php
abstract class Animal {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

   
    abstract public function makeSound();

   
    public function getNombre() {
        return $this->nombre;
    }
}
?>
