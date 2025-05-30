<?php 
function calcularSubtotal($producto,$cantidad){
  $subtotal= match ($producto){
  "chocolate"=> $cantidad * 1.00,
   "chicles"=>$cantidad * 0.50,
   "caramelos"=>$cantidad * 1.50


};
return $subtotal;

}

$total=0;
$total += calcularSubtotal("chocolate",2);
$total += calcularSubtotal("chicles",1);
$total += calcularSubtotal("caramelos",1);
echo "total : " .$total;
?>