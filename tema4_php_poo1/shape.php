<?php
class Shape {
    private $ancho;
    private $alto;

    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    // Métodos getter para acceder a los atributos privados
    public function getAncho() {
        return $this->ancho;
    }

    public function getAlto() {
        return $this->alto;
    }

    public function area() {
        return 0;
    }
}
?>
