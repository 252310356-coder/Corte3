<html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Inventario</h1>

   <form action="procesar.php" method="post">
    <input type="text" name="nombre" placeholder="Nombre del producto">
    <input type="number" name="precio" placeholder="Precio" step="0.01" min="0.01">
    
    <button type="submit" name="accion" value="agregar">Agregar al Inventario</button>
    
    <button type="submit" name="accion" value="procesar" step="0.01" min="0.01">Finalizar y Procesar</button>
</form>
</body>
</html>