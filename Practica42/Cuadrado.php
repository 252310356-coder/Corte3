<?php
require_once "Rectangulo.php";
class Cuadrado extends Rectangulo {

    /**
     * Constructor del Cuadrado.
     * Recibe únicamente el valor del $lado.
     * Al llamar a parent::__construct(), le pasa "Cuadrado" como nombre, 
     * y utiliza el mismo valor de $lado tanto para la base como para la altura.
     */
    public function __construct(float $lado) {
        parent::__construct("Cuadrado", $lado, $lado);
    }

}
?>