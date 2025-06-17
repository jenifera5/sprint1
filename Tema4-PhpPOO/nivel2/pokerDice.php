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



?>