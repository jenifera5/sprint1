<?php

use App\NumberChecker;

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
}
