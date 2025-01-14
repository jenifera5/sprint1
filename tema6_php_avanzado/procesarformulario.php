<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    // Comprueba que la solicitud  sea del tipo POST y que los datos vienen del formulario enviado.
    // También valida que se haya enviado el campo 'nombre'.
    // el ['REQUEST_METHOD']asegura que solo se procese la solicitud si es enviada mediante POST en este caso.
    $_SESSION['nombre'] = htmlspecialchars($_POST['nombre']);
    // guarda el valor de la variable nombre 
    // htmlspecialchars() convierte carateres especiales en entidades html. porque estos caracteres tienen un significado especial en HTML y podrían ser usados para inyectar código malicioso.
    header("Location: ejercicio1.php");
    exit();
} else {
    // Si se accede directamente o si no se cumplen las condiciones ,se redirige al inicio
    header("Location: ejercicio1.php");
    exit();
} 
?>
