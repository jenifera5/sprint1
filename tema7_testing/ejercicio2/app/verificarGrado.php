<?php
namespace App;

class VerificarGrado
{
    public function verificarGrado(int $nota): string
    {
        if ($nota >= 60) {
            return "Primera División";
        } elseif ($nota >= 45 && $nota <= 59) {
            return "Segunda División";
        } elseif ($nota >= 33 && $nota <= 44) {
            return "Tercera División";
        } else {
            return "Suspenso";
        }
    }
}

?>