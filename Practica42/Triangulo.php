<?php
require_once "Figura.php";

class Triangulo extends Figura {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        parent::__construct("Triangulo");
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area() {
        return ($this->base * $this->altura) / 2;
    }

    public function perimetro() {
        // Para calcular el perímetro de un triángulo, necesitamos conocer los lados.
        // Aquí asumiremos que es un triángulo equilátero para simplificar.
        return 3 * $this->base;
    }
}