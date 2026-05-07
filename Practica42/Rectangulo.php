<?php
require_once "Figura.php";

class Rectangulo extends Figura {
    // Propiedades específicas para las dimensiones de la figura
    private $base;
    private $altura;

    /**
     * Constructor del Rectángulo.
     * Recibe el nombre, la base y la altura.
     * Utiliza parent::__construct() para inicializar el nombre en la clase base (Figura).
     */
    public function __construct($nombre, $base, $altura) {
        parent::__construct($nombre);
        $this->base = $base;
        $this->altura = $altura;
    }

    /**
     * Implementación del método abstracto area().
     * Calcula el área multiplicando la base por la altura.
     */
    public function area() {
        return $this->base * $this->altura;
    }

    /**
     * Implementación del método abstracto perimetro().
     * Calcula el perímetro sumando los lados y multiplicando por 2.
     */
    public function perimetro() {
        return 2 * ($this->base + $this->altura);
    }
}
?>