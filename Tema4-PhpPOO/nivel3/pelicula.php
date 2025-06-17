<?php 
class Pelicula {
 private $nombre;

 private $duracion;


 private  $director;

function __construct(string $nombre,int $duracion,string $director){
    $this->nombre = $nombre;
    $this->duracion = $duracion;
    $this->director = $director;
}

function mostrarDatos(){

    return " Título:  ".$this->nombre ." Duración:  ".$this->duracion ." Director: " .$this->director;
}
function getDuracion(){
    return $this->duracion;
}

function getDirector(){
    return $this ->director;
}


 public function getNombre()
 {
  return $this->nombre;
 }
}


?>