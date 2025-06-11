<?php 
class PokerDice{

private  $caras=array("As","K","Q","J","7","8");
private $lastThrow;
private static  $totalTiradas = 0;


function throwDice(){


$this ->lastThrow =$this ->caras[array_rand($this -> caras)];

self::$totalTiradas++;


}

function shapeName():string{

    return $this->lastThrow;
}

function getTotalThrows():int{
return self::$totalTiradas;

}

}

for ($i=0; $i < 5; $i++) { 
  $dado=new PokerDice();
$dado->throwDice();
echo "En la tirada del dado salio : ".$dado->shapeName() ."<br>";
echo "La suma de tiradas en total son : ".$dado->getTotalThrows()."<br>";

}

?>