<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Sesiones en PHP</title>
</head>
<body>
<?php
// Iniciar la sesión
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    // Guardar el nombre en una variable de sesión
    $_SESSION['nombre'] = htmlspecialchars($_POST['nombre']); // Usar htmlspecialchars para evitar inyección de HTML
}

if (isset($_SESSION['nombre'])) {
    // Muestra saludo si el nombre está en sesión
    echo "<h1>Bienvenido/a, " . $_SESSION['nombre'] . "!</h1>";
    echo "<a href='logout.php'>Cerrar sesión</a>";
} else {
    // Mostrar formulario si no existe la variable de sesión
?>
    <form method="post" action="">
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
