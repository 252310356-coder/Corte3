<?php

require_once "Figura.php";

class Circulo extends Figura {
    private $radio;

    public function __construct($radio) {
        parent::__construct("Circulo");
        $this->radio = $radio;
    }

    public function area() {
        return pi() * pow($this->radio, 2);
    }

    public function perimetro() {
        return 2 * pi() * $this->radio;
    }

}