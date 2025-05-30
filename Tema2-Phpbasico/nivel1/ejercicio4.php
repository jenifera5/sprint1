<?php 
$limite=10;
$avance=1;

function contarhasta($limite=10,$avance=1){
    if($avance<=0){
    echo "El avance debe ser mayor a 0";
      return; 
    }
  for ($i=1; $i <=$limite ; $i+= $avance) { 
   
   echo $i . "<br>";
  }
  
}

 echo "Contando hasta 10 de 1 en 1:<br>";
contarHasta(10, 1);


echo "<br>Contando hasta 20 de 2 en 2:<br>";
contarHasta(20, 2);


echo "<br>Contando hasta 15 de 3 en 3:<br>";
contarHasta(15, 3);


echo "<br>Contando hasta 10 de 5 en 5:<br>";
contarHasta(10, 5);

echo "<br>Contando hasta 10 con incremento negativo:<br>";
contarHasta(10, -1); 

?>