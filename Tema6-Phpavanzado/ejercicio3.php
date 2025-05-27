<?php 
class Persona{
  private $nombre;

  private $apellido;

  private $edad;

  function __construct( string $nombre,string $apellido,int $edad){
  $this -> nombre = $nombre;
  $this -> apellido = $apellido;
  $this -> edad = $edad;

  }
    
  function __toString()
  {
    return self::class . " : " . $this->nombre . " " . $this->apellido . " " . $this->edad ;
  }

}

$persona = new Persona("Maria","Perez",34);
echo $persona;

?>