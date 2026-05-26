<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <form method="post" action="index.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria"><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio"><br><br>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock"><br><br>

        <input type="submit" value="Guardar">

        <input type="submit" value="Leer Productos" formaction="leer_productos.php">
    </form>

    <?php
    require_once "Producto.php";
     $archivo = "producto.txt";
    try {
    if (!file_exists($archivo)) {
        // Si el archivo no existe, se crea automáticamente al abrirlo en modo "w"
        $archivo = fopen($archivo, "w");
        fclose($archivo); // Cerrar el archivo después de crearlo
    }
    } catch (Exception $e) {
        echo "Ocurrió un error: " . $e->getMessage();
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $categoria = $_POST["categoria"];
        $precio = $_POST["precio"];
        $stock = $_POST["stock"];

        $producto = new Producto($nombre, $categoria, $precio, $stock);
        $producto->guardarEnArchivo("producto.txt");
        }
        
    ?>
</body>
</html>