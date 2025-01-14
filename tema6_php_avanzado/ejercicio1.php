<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Sesiones en PHP</title>
</head>
<body>
<?php
session_start();

if (isset($_SESSION['nombre'])) {
    // verifica si existe la variable nombre
    echo "<h1>Bienvenido/a, " . htmlspecialchars($_SESSION['nombre']) . "!</h1>";
    echo "<a href='logout.php'>Cerrar sesión</a>";
} else {
    // muestra  el formulario si no existe la variable de sesión
?>
    <form method="post" action="procesarformulario.php">
        <label for="nombre">Introduce tu nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
<?php
}
?>
</body>
</html>
