<?php
require_once 'animal.php';

class Perro extends Animal {
    public function makeSound() {
        echo "Nombre: " . $this->getNombre() . " - Sonido: Guau, guau!<br>";
    }
}
?>
