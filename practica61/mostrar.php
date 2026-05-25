<?php
// Nombre del arcvhivo que tiene los asistentes

$archivo = "asistentes.txt";

try {
    //Verificar si el archivo existe
    if (!file_exists($archivo)) {
        throw new Exception("El archivo no existe.");
    }

    //Abrir el archivo para lectura
    $fp = fopen($archivo, "r");

    //Si no se puede abrir el archivo
    if (!$fp) {
        throw new Exception("No se pudo abrir el archivo.");
    }
    //Leer el archivo línea por línea y mostrar los asistentes
    $contador = 1;
    while (!feof($fp)) {
        //Leer una línea del archivo
        $linea = fgets($fp);
        //htmlspecialchars para evitar problemas de seguridad
        echo $contador . ". " . htmlspecialchars($linea) . "<br>";
        $contador++;
    }
    fclose($fp);
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage();
}