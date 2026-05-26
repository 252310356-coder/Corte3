<?php
require_once "Producto.php";
$archivo = "producto.txt";
$productos = Producto::leerProductosDesdeArchivo($archivo);

// 1. PROCESAR LA ACTUALIZACIÓN (POST)
if (isset($_POST['btn_actualizar'])) {
    $idx = $_POST['indice_editar'];
    
    // Si el usuario deja el campo vacío, usamos el valor que ya tenía (campos 'old_')
    $nombre    = !empty($_POST['nombre'])    ? $_POST['nombre']    : $_POST['old_nombre'];
    $categoria = !empty($_POST['categoria']) ? $_POST['categoria'] : $_POST['old_categoria'];
    $precio    = !empty($_POST['precio'])    ? $_POST['precio']    : $_POST['old_precio'];
    $stock     = !empty($_POST['stock'])     ? $_POST['stock']     : $_POST['old_stock'];

    // Actualizamos el objeto en esa posición del array
    $productos[$idx] = new Producto($nombre, $categoria, $precio, $stock);
    
    // Guardamos el array completo de vuelta al TXT (Modo "w")
    Producto::sobrescribirArchivo($archivo, $productos);
    
    header("Location: leer_productos.php?msg=updated");
    exit();
}

// 2. INTERFAZ (HTML)
?>
<!DOCTYPE html>
<html>
<head><title>Lista de Productos</title></head>
<body>
    <a href="index.php">⬅ Volver al Registro</a>
    <h1>Productos Registrados</h1>

    <?php if (isset($_GET['msg'])) echo "<p style='color:blue'>¡Producto actualizado!</p>"; ?>

    <?php
    // FORMULARIO DE EDICIÓN (Aparece al presionar 'Modificar')
    if (isset($_GET['editar'])) {
        $i = $_GET['editar'];
        if (isset($productos[$i])) {
            $p = $productos[$i];
    ?>
            <fieldset>
                <legend>Modificando Producto #<?php echo $i; ?></legend>
                <form method="POST">
                    <input type="hidden" name="indice_editar" value="<?php echo $i; ?>">
                    
                    <input type="hidden" name="old_nombre" value="<?php echo $p->getNombre(); ?>">
                    <input type="hidden" name="old_categoria" value="<?php echo $p->getCategoria(); ?>">
                    <input type="hidden" name="old_precio" value="<?php echo $p->getPrecio(); ?>">
                    <input type="hidden" name="old_stock" value="<?php echo $p->getStock(); ?>">

                    <p>Nombre Actual: <b><?php echo $p->getNombre(); ?></b><br>
                    <input type="text" name="nombre" placeholder="Nuevo Nombre"></p>
                    
                    <p>Categoría Actual: <b><?php echo $p->getCategoria(); ?></b><br>
                    <input type="text" name="categoria" placeholder="Nueva Categoría"></p>

                    <p>Precio: <input type="number" name="precio" placeholder="<?php echo $p->getPrecio(); ?>"></p>
                    <p>Stock: <input type="number" name="stock" placeholder="<?php echo $p->getStock(); ?>"></p>
                    
                    <button type="submit" name="btn_actualizar">Guardar Cambios</button>
                    <a href="leer_productos.php">Cancelar</a>
                </form>
            </fieldset>
            <br>
    <?php 
        }
    } 
    ?>

    <table border="1">
        <tr><th>ID</th><th>Datos</th><th>Acciones</th></tr>
        <?php foreach ($productos as $index => $prod): ?>
        <tr>
            <td><?php echo $index; ?></td>
            <td><?php echo $prod->getInfo(); ?></td>
            <td><a href="?editar=<?php echo $index; ?>">Modificar</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>