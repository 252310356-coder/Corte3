<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Descuentos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h2>Calculadora de Descuentos</h2>
    
    <form method="POST">
        <label>Nombre del producto:</label>
        <input type="text" name="producto" required>
        <label>Precio:</label>
        <input type="number" name="precio" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    require_once 'Tienda.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $producto = $_POST['producto'];
        $precio = floatval($_POST['precio']); // Convertir a número
        
        $tienda = new Tienda();
        $descuento = $tienda->calcularDescuento($precio);
        $total = $tienda->calcularTotal($precio, $descuento);
        
        $tienda->mostrarResultado($producto, $precio, $descuento, $total);
    }
    ?>

</body>
</html>