<?php
//calculadora
function calculadora($num1, $num2, $operacion) {
    switch($operacion) {
        case "suma":
            return $num1 + $num2;
            break;
        case "resta":
            return $num1 - $num2;
            break;
        case "multiplicación":
            return $num1 * $num2;
            break;
        case "división":
            if ($num2 == 0) {
                return "Error: No se puede dividir por cero.";
            } else {
                return $num1 / $num2;
            }
            break;
        default:
            return "Operación no válida.";
    }
}

// Ejemplo de la función calculadora
$num1 = 10;
$num2 = 5;

echo "Suma: " . calculadora($num1, $num2, "suma") . "<br>";
echo "Resta: " . calculadora($num1, $num2, "resta") . "<br>";
echo "Multiplicación: " . calculadora($num1, $num2, "multiplicación") . "<br>";
echo "División: " . calculadora($num1, $num2, "división") . "<br>";
?>