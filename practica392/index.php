<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Practica de divisiones</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="numerador1">Numerador 1:</label>
        <input type="number" id="numerador1" name="numerador1" required><br><br>

        <label for="denominador1">Denominador 1:</label>
        <input type="number" id="denominador1" name="denominador1" required><br><br>

        <label for="numerador2">Numerador 2:</label>
        <input type="number" id="numerador2" name="numerador2" required><br><br>

        <label for="denominador2">Denominador 2:</label>
        <input type="number" id="denominador2" name="denominador2" required><br><br>

        <label for="potencia">Potencia:</label>
        <input type="number" id="potencia" name="potencia" required><br><br>

        <input type="submit" value="calcular" name="operacion">
    </form>

<?php
require_once "fraccion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numerador1 = $_POST['numerador1'];
    $denominador1 = $_POST['denominador1'];
    $numerador2 = $_POST['numerador2'];
    $denominador2 = $_POST['denominador2'];
    $potencia = $_POST['potencia'];

    // ❌ VALIDACIÓN DE ERROR
    if ($denominador1 == 0 || $denominador2 == 0) {

        echo "<div class='result-container'>
                <h3 style='color:red;'>❌ Error</h3>
                <div class='result-item'>
                    No se pueden hacer fracciones con denominador 0
                </div>
              </div>";

    } else {

        // ✅ SOLO SI TODO ESTÁ BIEN
        $fraccion1 = new Fraccion($numerador1, $denominador1);
        $fraccion2 = new Fraccion($numerador2, $denominador2);

        echo "<div class='result-container'>
                <h3>✨ Resultados ✨</h3>

                <div class='result-item'>Suma: " . $fraccion1->sumar($fraccion2) . "</div>
                <div class='result-item'>Resta: " . $fraccion1->restar($fraccion2) . "</div>
                <div class='result-item'>Multiplicación: " . $fraccion1->multiplicar($fraccion2) . "</div>
                <div class='result-item'>División: " . $fraccion1->dividir($fraccion2) . "</div>
                <div class='result-item'>Potencia: " . $fraccion1->potencia($potencia) . "</div>
                <div class='result-item'>Porcentaje: " . $fraccion1->fraccion_porcentaje($potencia) . "</div>
              </div>";
    }
}
?>
?>
</body>
</html>