<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    // Guardar el nombre en una variable de sesión
    $_SESSION['nombre'] = htmlspecialchars($_POST['nombre']);
    // Redirigir al archivo principal
    header("Location: ejercicio1.php");
    exit();
} else {
    // Si se accede directamente, redirigir al inicio
    header("Location: ejercicio1.php");
    exit();
}
