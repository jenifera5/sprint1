<?php 

class Employee{
private $nombre;

private $sueldo;

function Initialize($nombre,$sueldo){
$this ->nombre = $nombre;
$this ->sueldo = $sueldo;
}

function Print(){

    echo "Nombre:". $this->nombre ."<br>";

    if($this->sueldo>6000){
    echo"Debe pagar impuesto";
    }else{
    echo "No debe pagar impuestos";  
    }
}

}



?>