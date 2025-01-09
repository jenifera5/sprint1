<?php
require_once 'shape.php';

class Rectangulo extends Shape {
    public function area() {
        return $this->ancho * $this->alto; 
    }
}
?>



