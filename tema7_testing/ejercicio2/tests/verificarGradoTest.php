<?php
use App\VerificarGrado;

class VerificarGradoTest extends \PHPUnit\Framework\TestCase
{
    public function testPrimeraDivision()
    {
        $verificarGrado = new VerificarGrado();
        $result = $verificarGrado->verificarGrado(75);
        $this->assertEquals("Primera División", $result);
    }

    public function testSegundaDivision()
    {
        $verificarGrado = new VerificarGrado();
        $result = $verificarGrado->verificarGrado(50);
        $this->assertEquals("Segunda División", $result);
    }

    public function testTerceraDivision()
    {
        $verificarGrado = new VerificarGrado();
        $result = $verificarGrado->verificarGrado(40);
        $this->assertEquals("Tercera División", $result);
    }

    public function testSuspenso()
    {
        $verificarGrado = new VerificarGrado();
        $result = $verificarGrado->verificarGrado(25);
        $this->assertEquals("Suspenso", $result);
    }
}
?>