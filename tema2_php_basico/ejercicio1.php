<?php
$integer = 42;           
$double = 3.1416;       
$string = "Hola";  
$boolean = true;         


echo "Integer: $integer <br>";
echo "Double: $double <br>";
echo "String: $string <br>";
echo "Boolean: " . ($boolean ? 'true' : 'false') . "<br>";


define("NOMBRE", "Soy Jenifer ");


echo "<h1>" . NOMBRE . "</h1>";
?>