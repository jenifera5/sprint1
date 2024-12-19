<?php
// Iniciar la sesión
session_start();

// Eliminar todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Se redirige al formulario
header("Location: ejercicio1.php");
exit();
?>
