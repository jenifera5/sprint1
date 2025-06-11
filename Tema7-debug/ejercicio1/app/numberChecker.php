<?php
namespace App;
class NumberChecker  {

private $number;
	public function __construct($number){
      if(!is_int($number)){
       throw new \InvalidArgumentException("Solo se perimiten numeros enteros");
	  }
	  $this->number=$number;
	}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}
?>
