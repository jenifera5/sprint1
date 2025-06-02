<?php

function costeLlamada(int $min): string
{
    if ($min <= 3) {
        return "Tiene un coste extra de 10 céntimos";
    }

    $minExtra = $min - 3;
    $costo = 0.10 + ($minExtra * 0.05);

    return "El costo adicional será: " . $costo . "€";
}

echo costeLlamada(3) . "<br>";
echo costeLlamada(40) . "<br>";

?>
