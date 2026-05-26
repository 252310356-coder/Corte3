<?php
require_once "Producto.php";
    // CORRECCIÓN: Llamamos al método desde la clase Producto y asignamos el resultado a $productos
    $productos = Producto::leerProductosDesdeArchivo("producto.txt");
    
    // Verificamos que $productos sea un array o una colección válida antes de recorrerlo
    if (is_array($productos) || is_object($productos)) {
        foreach ($productos as $producto) {
        echo $producto->getInfo() . "<br>";
        }
    } else {
        echo "No se encontraron productos o el formato no es válido.";
    }
?>