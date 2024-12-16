<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Constantes Mágicas en PHP</title>
</head>
<body>
    <h1>Ejemplo de Constantes Mágicas</h1>
    <?php
    echo "<p>Este archivo se encuentra en: <strong>" . __FILE__ . "</strong></p>";
    echo "<p>Estás en la línea: <strong>" . __LINE__ . "</strong></p>";
    
    // Muestra el nombre de la función usando otra constante mágica
    function mostrarFuncion() {
        echo "<p>Estás ejecutando la función: <strong>" . __FUNCTION__ . "</strong></p>";
    }
    
    mostrarFuncion();
    
    // Muestra el nombre de la clase y método
    class Ejemplo {
        public function mostrarMetodo() {
            echo "<p>Estás en la clase: <strong>" . __CLASS__ . "</strong></p>";
            echo "<p>Y en el método: <strong>" . __METHOD__ . "</strong></p>";
        }
    }
    
    $ejemplo = new Ejemplo();
    $ejemplo->mostrarMetodo();
    ?>
</body>
</html>
