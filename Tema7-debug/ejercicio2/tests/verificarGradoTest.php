<?php 
use App\VerificarGrado;

class verificarGradoTest extends \PHPUnit\Framework\TestCase {

   function testPrimeraDivision(){
     $verificarGrado = new VerificarGrado();
     $this->assertEquals("Estas en la primera division", $verificarGrado->verificarGrado(60));
   }

   function testSegundaDivision(){
     $verificarGrado = new VerificarGrado();
     $this->assertEquals("Estas en la segunda division", $verificarGrado->verificarGrado(50));

   }

   function testTerceraDivision(){
        $verificarGrado = new VerificarGrado();
        $this->assertEquals("Estas en la tercera division", $verificarGrado->verificarGrado(35));
   }

   function testSuspenso(){
        $verificarGrado = new VerificarGrado();
         $this->assertEquals("Has suspendido",$verificarGrado->verificarGrado(20));
   }
     
}

?>