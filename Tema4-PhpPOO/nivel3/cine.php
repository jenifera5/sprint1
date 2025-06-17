
<?php

class Cine {

  private $nombre;

   private  $poblacion;


    private $peliculas=[];


    function __construct( string  $nombre, string $poblacion){
        $this -> nombre = $nombre;
        $this -> poblacion = $poblacion;
        

    }
 
function addMovies(Pelicula $pelicula){
   $this->peliculas[] = $pelicula;
   
 
}

function mostrarPeliculas(){
    foreach ($this->peliculas as $pelicula) {
      echo $pelicula->mostrarDatos()."<br>";
     
    }
}


function peliculaLarga(){
    $maxduracion=0;
    $peliculamaslarga=null;

 foreach ($this->peliculas  as $pelicula) {
   if ($pelicula ->getDuracion() > $maxduracion) {
       $maxduracion = $pelicula->getDuracion();
       $peliculamaslarga = $pelicula;
    
   }
 }
 if($peliculamaslarga){
    echo "La películla mas larga es :  ". $peliculamaslarga-> mostrardatos() ." con ".$peliculamaslarga-> getDuracion()."  min .<br>";
 }

}

function buscarDirector(string $nombreDirector){
       $busqueda =[];
       foreach ($this->peliculas as $pelicula) {
        if($pelicula->getDirector()===$nombreDirector &&!in_array($pelicula->getNombre(),$busqueda)){
           $busqueda[]=$pelicula->getNombre();
        }
      }
   
       echo "Películas del director $nombreDirector:<br>";
       foreach ($busqueda as $titulo) {
       echo "$titulo: $titulo<br>";
    }
  }

   public function getNombre()
   {
      return $this->nombre;
   }

    
    public function getPoblacion()
    {
        return $this->poblacion;
    }

 
    public function getPeliculas()
    {
        return $this->peliculas;
    }
}
 


?> 