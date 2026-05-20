<?php
require_once "Figura.php";

class Triangulo extends Figura {
    private $base;
    private $altura;

    /**
     * Constructor del Triángulo.
     * Recibe la base y la altura, inicializando el nombre en la clase padre.
     */
    public function __construct($base, $altura) {
        parent::__construct("Triangulo");
        $this->base = $base;
        $this->altura = $altura;
    }

    /**
     * Implementación del método abstracto area().
     * Calcula el área usando la fórmula: (base * altura) / 2
     */
    public function area() {
        return ($this->base * $this->altura) / 2;
    }

    /**
     * Implementación del método abstracto perimetro().
     * Para este ejemplo simplificado, se asume un triángulo equilátero y se multiplica la base por 3.
     */
    public function perimetro() {
        return 3 * $this->base;
    }
}
?>