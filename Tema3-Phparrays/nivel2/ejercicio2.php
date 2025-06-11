<?php 

$alumnos =[
    "Ana"   => [4.5, 7, 9, 5.9, 6],
    "Maria" => [5, 7.5, 6.9, 4, 7], 
    "Pedro" => [4.9, 6, 5.7, 3.5, 6],
    "Jose"  => [2.9, 6, 5.2, 3, 6]

];

calcularMedia($alumnos);

function calcularMedia( array $alumnos){
    $sumaTotal=0;
$cantidadNotas=0;
    foreach ($alumnos as $nombre => $notas) {
      $media= array_sum($notas)/count($notas);
      echo "La media de " .$nombre. " es :" .round($media,2) ."<br>";
   
   $sumaTotal += array_sum($notas);
   $cantidadNotas += count($notas);

    }
$mediaClase = $sumaTotal/$cantidadNotas;
echo "la media total de la clase es:" . round($mediaClase,2);
}

?>