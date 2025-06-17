<?php
require_once 'pokerDice.php';
for ($i=0; $i < 5; $i++) { 
    $dado=new PokerDice();
    $dado->throwDice();
    echo "En la tirada del dado salio : ".$dado->shapeName() ."<br>";
    echo "La suma de tiradas en total son : ".$dado->getTotalThrows()."<br>";

}
?>