<?php
$sobremi=[
  "nombre" => "Jenifer",
  "edad" => "31", 
  "email" => "jenifera@gmail.com",
  "comida favorita" => "Hamburguesa"

];

foreach ($sobremi as $enunciado => $respuesta) {
    echo  $enunciado .":" . $respuesta ."<br>" ;
}
?>