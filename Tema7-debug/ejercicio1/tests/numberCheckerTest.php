<?php

namespace App;
class NumberCheckerTest extends \PHPUnit\Framework\TestCase {
    
    public function testIsEven() {
        // Crear una instancia de NumberChecker con un número par
        $numberChecker = new NumberChecker(20);
        $result = $numberChecker->isEven();

        // Verificar que el número 20 es par (debería devolver true)
        $this->assertTrue($result);
    }

    public function testIsOdd() {
        // Crear una instancia de NumberChecker con un número impar
        $numberChecker = new NumberChecker(5);
        $result = $numberChecker->isEven();

        // Verificar que el número 5 es impar (debería devolver false)
        $this->assertFalse($result);
    }
    

    public function testIsNegative(){
        $numberChecker= new NumberChecker(-25);
        $result = $numberChecker->isPositive();
        $this->assertFalse($result);
    }
public function testStringThrowException(){
    $this->expectException(\InvalidArgumentException::class);
    new NumberChecker("hola");
}

}

?>