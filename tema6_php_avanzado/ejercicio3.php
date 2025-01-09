<?php
class Persona {
    private $nombre;
    private $edad;

    // Atributos mágicos adicionales
    private $datosExtras = [];

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Sobreescribiendo el método mágico __toString
    public function __toString() {
        return "Nombre: {$this->nombre}, Edad: {$this->edad} años.";
    }

    // Sobreescribiendo el método mágico __get
    public function __get($propiedad) {
        if (array_key_exists($propiedad, $this->datosExtras)) {
            return $this->datosExtras[$propiedad];
        }
        return "La propiedad '{$propiedad}' no existe o no es accesible.";
    }

    // Método adicional para añadir datos "mágicos"
    public function agregarDato($clave, $valor) {
        $this->datosExtras[$clave] = $valor;
    }
}

// Crear una instancia de Persona
$persona = new Persona("Juan Pérez", 30);


echo $persona . "<br>";

// Usar el método mágico __get
echo $persona->ocupacion . "<br>"; // Intentar acceder a una propiedad inexistente

// Agregar una propiedad "mágica" y acceder a ella
$persona->agregarDato("ocupacion", "Desarrollador Web");
echo $persona->ocupacion . "<br>";
?>
