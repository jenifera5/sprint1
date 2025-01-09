<?php 
require_once 'shape.php';

class Triangulo extends Shape {
    public function area() {
        return ($this->ancho * $this->alto) / 2;
    }
}
?>
