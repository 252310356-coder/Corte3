<?php
if (isset($_POST["Guardar"]) && $_POST["Guardar"] == "Guardar") {
    $actividad = $_POST["Actividad"];
    $responsable = $_POST["responsable"];
    $fecha = $_POST["fecha"];

    // Aquí puedes guardar los datos en una base de datos o en un archivo
    // Por ejemplo, guardarlos en un archivo de texto:
    $file = fopen("bitacora.txt", "a");
    //Validar que los campos no estén vacíos antes de escribir en el archivo
    if(!empty( $actividad ) && !empty( $responsable ) && !empty( $fecha ) ){
    fwrite($file, "Fecha: " . htmlspecialchars($fecha) . PHP_EOL);
    fwrite($file, "Actividad: " . htmlspecialchars($actividad) . PHP_EOL);
    fwrite($file, "Responsable: " . htmlspecialchars($responsable) . PHP_EOL);
    fwrite($file, "-------------------------" . PHP_EOL);
    fclose($file);

    echo "<p>Actividad guardada exitosamente.</p>";
}else{
    echo "<p>Por favor, complete todos los campos.</p>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitacora</title>
</head>
<body>
    <h1>Bitacora de Actividades</h1>
    <form action="index.php" method="post">
        <label for="Actividad">Actividad:</label>
        <textarea id="Actividad" name="Actividad"></textarea><br><br>

        <label for="responsable">Responsable:</label>
        <input type="text" id="responsable" name="responsable" required><br><br>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <input type="submit" name="Guardar" value="Guardar">
    </form>
    <form action="index.php" method="post">
        <input type="submit" name="actividades_registradas" value="Actividades Registradas">
    </form>

    <h2>Actividades Registradas</h2>
    <?php
    try {
    if (isset($_POST["actividades_registradas"]) && $_POST["actividades_registradas"] == "Actividades Registradas") {
        // Mostrar las actividades registradas
        echo "<ol>";
        if (file_exists("bitacora.txt")) {
             $n = 1;
            $handle = fopen("bitacora.txt", "r");
            if ($handle) {
                //Verificar que el archivo no esté vacío antes de leerlo
                if (filesize("bitacora.txt") > 0) {
                while (($line = fgets($handle)) !== false) {
                    $n++;
                    echo htmlspecialchars($line) . "<br>";
                    if ($n % 4 == 0) {
                        echo "<li>Bitacora</li>";
                    }
                }
                } else {
                    throw new Exception("El archivo de bitacora está vacío.");
                }
                fclose($handle);
            } else {
                throw new Exception("No se pudo abrir el archivo de bitacora o no se puede leer.");
            }
        } else {
            throw new Exception("No existe el archivo de bitacora.");
            
        }
        echo "</ol>";
    }
    } catch (Exception $e) {
        echo "<p>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
?>
</body>
</html>