<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Asistentes</h1>
    <form action="registro.php" method="post">
        <label for="nombre">Nombre del asistente:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>

<?php
// arreglo de nombres de asistentes 
// Este script crea un archivo de texto y escribe los nombres de los asistentes en él 
// Registro de asistentes por post

$nombreAsistente = $_POST['nombre'] ?? null; // Obtener el nombre del asistente desde el formulario

$nombres = [ "María López", 
"Juan Pérez", 
"Carlos García", 
"Ana Torres", 
"Luis Sánchez" ];

// Nombre del archivo donde se guardarán los nombres 
$nombreArchivo = "asistentes.txt";

//Se hace solo una vez para crear el archivo y escribir los nombres iniciales, luego se agregan los nuevos nombres al final del archivo
if (!file_exists($nombreArchivo)) {
try {
// tratamos de abrir el archivo para escritura 
// Si el archivo no existe, se creará automáticamente 
$RArchivo = fopen($nombreArchivo, "w"); 
//Si no se pudo abrir el archivo, lanzamos una excepción
if (!$RArchivo) { 
    throw new Exception("No se pudo abrir el archivo."); } 
//Escribir nombres en el archivo 
foreach ($nombres as $nombre) { 
    fwrite($RArchivo, $nombre . PHP_EOL); // PHP_EOL inserta un salto de línea compatible con el sistema operativo 
} 
fclose($RArchivo); 
echo "Archivo creado y nombres escritos correctamente."; 
} catch (Exception $e) { 
    echo "Ocurrió un error: " . $e->getMessage(); 
}
}
    
$nombres[] = $nombreAsistente; // Agregar el nuevo nombre al arreglo de nombres

try {
    // Abrir el archivo para escritura (modo "a" para agregar al final del archivo)
    $RArchivo = fopen($nombreArchivo, "a");
    
    // Si no se pudo abrir el archivo, lanzar una excepción
    if (!$RArchivo) {
        throw new Exception("No se pudo abrir el archivo.");
    }
    
    // Escribir el nuevo nombre en el archivo
    fwrite($RArchivo, $nombreAsistente . PHP_EOL); // PHP_EOL inserta un salto de línea compatible con el sistema operativo
    
    // Cerrar el archivo después de escribir
    fclose($RArchivo);
    
    echo "Nombre registrado correctamente.";
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage();
}
