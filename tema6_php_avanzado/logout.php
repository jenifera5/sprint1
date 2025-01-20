<?php
session_start();
session_destroy(); 
// Destruye la sesión
header("Location: ejercicio1.php"); 
//Se redirige al formulario principal
exit();
?>
