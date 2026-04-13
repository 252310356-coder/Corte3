<?php

class Tienda {
    // Método con parámetros y retorno
 public function calcularDescuento($precio) {
 if ($precio >= 1000) {
 return $precio * 0.20;
 } elseif ($precio >= 500) {
 return $precio * 0.10;
 } else {Se ysa 
 return 0;
 }
 }
 // Método con parámetros y retorno
 public function calcularTotal($precio, $descuento) {
    if (is_string($descuento)) {
        return $descuento; // Retorna el mensaje de error si el descuento es un string
    }
 return $precio - $descuento;
 }
 // Método para mostrar resultados
public function mostrarResultado($producto, $precio, $descuento, $total) {

 if ($total == $precio && $precio > 0) {
            echo "<p class='error'>No hay descuento disponible.</p>";
        } elseif ($total < 0) {
            echo "<p class='error'>Error: El total no puede ser negativo.</p>";
        } else {
        echo "<div class='result-box'>";
        echo "<h3>Resultado</h3>";
        echo "<div class='item'>Producto: <strong>$producto</strong></div>";
        echo "<div class='item'>Precio original: $$precio</div>";
        echo "<div class='item'>Descuento: $$descuento</div>";
        echo "<div class='total'>Total a pagar: $$total</div>";

       
        echo "</div>";
    }
}

}