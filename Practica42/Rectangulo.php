<?php
require_once "Figura.php";


class Rectangulo extends Figura {
    private $base;
    private $altura;

    public function __construct($nombre, $base, $altura) {
        parent::__construct($nombre);
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area() {
        return $this->base * $this->altura;
    }

    public function perimetro() {
        return 2 * ($this->base + $this->altura);
    }
}