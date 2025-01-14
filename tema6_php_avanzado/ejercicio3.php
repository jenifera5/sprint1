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

    // Se sobreescribe el método mágico __toString para definir como se convierte el objeto
    public function __toString() {
        return "Nombre: {$this->nombre}, Edad: {$this->edad} años.";
    }

    // se sobreescribe el método mágico __get para controlar el acceso a palabras no definidas de forma directa de una clase
    public function __get($propiedad) {
        if (array_key_exists($propiedad, $this->datosExtras)) {
            return $this->datosExtras[$propiedad];
            // si la propiedad existe en datos extra ,devuelve su valor
        }
        return "La propiedad '{$propiedad}' no existe o no es accesible.";
    }

    // Método adicional para añadir datos "mágicos"
    public function agregarDato($clave, $valor) {
        $this->datosExtras[$clave] = $valor;
    }
}

// Crear una instancia de la clase Persona
$persona = new Persona("Juan Pérez", 30);


echo $persona . "<br>";

//Se intenta acceder a una propiedad inexistente se activa el metodo magico _get
echo $persona->ocupacion . "<br>"; 

// Se agrega una propiedad "mágica" y se accede a ella
$persona->agregarDato("ocupacion", "Desarrollador Web");
echo $persona->ocupacion . "<br>";
?>
