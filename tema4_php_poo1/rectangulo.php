<?php
require_once 'shape.php';

class Rectangulo extends Shape {
    public function __construct($ancho, $alto) {
        parent::__construct($ancho, $alto); 
    }

    public function area() {
        return $this->ancho * $this->alto; 
    }
}
?>

