<?php

require_once 'shape.php';

class triangulo extends Shape{

    function area(){
    return ($this->base * $this->altura) /2;

    }


    
}



?>