<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica de divisiones</title>
</head>
<body>
    <form action="resultados.php" method="post">
        <label for="numerador1">Numerador 1:</label>
        <input type="number" id="numerador1" name="numerador1" required><br><br>
        <label for="denominador1">Denominador 1:</label>
        <input type="number" id="denominador1" name="denominador1" required><br><br>
        <label for="numerador2">Numerador 2:</label>
        <input type="number" id="numerador2" name="numerador2" required><br><br>
        <label for="denominador2">Denominador 2:</label>
        <input type="number" id="denominador2" name="denominador2" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Incluir el archivo de pruebas para ejecutar las operaciones con fracciones
    require_once 'fraccion.php';

    // Crear dos fracciones con los valores ingresados en el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    }
    ?>
</body>
</html>