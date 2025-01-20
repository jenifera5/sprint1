
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    // Comprueba que la solicitud  sea del tipo POST y que los datos vienen del formulario enviado.
    // También valida que se haya enviado el campo 'username'.
    // el ['REQUEST_METHOD']asegura que solo se procese la solicitud si es enviada mediante POST en este caso.
    $_SESSION['username'] = ($_POST['username']);
    // Redirige al formulario principal para mostrar el mensaje de bienvenida
    header("Location: ejercicio1.php");
    exit();
}
?>