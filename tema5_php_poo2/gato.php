<?php
require_once 'animal.php';
class Gato extends Animal {
    public function makeSound() {
        echo "Nombre: " . $this->getNombre() . " - Sonido: Miau!<br>";
    }
}
?>