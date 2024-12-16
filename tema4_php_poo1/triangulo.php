<?php
require_once 'shape.php';

class Triangulo extends Shape {
    public function __construct($ancho, $alto) {
        parent::__construct($ancho, $alto); 
    }

    public function area() {
        return ($this->ancho * $this->alto) / 2; 
    }
}
?>
