<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    // Comprueba que la solicitud sea del tipo POST.
    // También valida que se haya enviado el campo 'nombre'.
    // el ['REQUEST_METHOD']asegura que solo se procese la solicitud si es enviada mediante POST en este caso.
    $_SESSION['nombre'] = htmlspecialchars($_POST['nombre']);
    // Se redirige al archivo principal
    header("Location: ejercicio1.php");
    exit();
} else {
    // Si se accede directamente o si no se cumplen las condiciones ,se redirige al inicio
    header("Location: ejercicio1.php");
    exit();
} 
?>
