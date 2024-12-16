<?php
class Shape {
    protected $ancho;
    protected $alto;

    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    protected function getAncho() {
        return $this->ancho;
    }

    protected function getAlto() {
        return $this->alto;
    }

    public function area() {
        return 0;
    }
}
?>
