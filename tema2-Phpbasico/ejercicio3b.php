<?php
$num1=10;
$num2=2;

function  calculadora ($num1,$num2,$operacion){
$resultado=match($operacion){
'+'=>$num1 + $num2,
'-'=>$num1-$num2,
'*'=>$num1*$num2,
'/' => $num2 != 0 ? $num1 / $num2 : "Error: división por cero",
'default'=> "Operación no válida"
};
return $resultado;
}

echo calculadora(10, 2, '+'). "<br>";
echo calculadora(10,2,'-'). "<br>";
echo calculadora(10,2,'*'). "<br>";
echo calculadora(10,2,'/'). "<br>";

?>