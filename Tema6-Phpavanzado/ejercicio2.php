<?php 
class Ejercicio2{


function mostrarContantesMagicas(){
echo"__LINE__ :Muestra el numero de la linea actual "." ej: ". __LINE__ ."<br>";
echo"__FILE__ :Da el nombre completo del archivo y su ruta actual "." ej: ".__FILE__ ."<br>";
echo"__DIR__:Es el directorio donde se encuentra el archivo actual" ." ej: ".__DIR__."<br>";
echo"__FUNCTION__ :Da el nombre de la funcion actual"." ej: ".__FUNCTION__ ."<br>";
echo"__CLASS__: Da el nombre de la Clase " ." ej: ".__CLASS__."<br>";

}



}
$ejercicio2=new Ejercicio2();
$ejercicio2->mostrarContantesMagicas();

?>