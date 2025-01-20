</body>
</html>
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

if (isset($_SESSION['username'])) {
    // Si el usuario ya inició sesión, muestra el mensaje de bienvenida
    echo "<h1>Bienvenido/a, " . ($_SESSION['username']) . "!</h1>";
    echo "<a href='logout.php'>Cerrar sesión</a>";
} else {
    // Si no estás registrado, muestra el formulario
?>
    <form method="post" action="procesoformulario.php">
        <label for="usuario">Introduce tu usuario:</label><br>
        <input type="text" id="usuario" name="username" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
<?php
}
?>
</body>
</html>
