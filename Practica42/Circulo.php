<?php
require_once "Figura.php";

class Circulo extends Figura {
    private $radio;

    /**
     * Constructor del Círculo.
     * Recibe el $radio y llama al constructor padre pasándole el nombre "Circulo".
     */
    public function __construct($radio) {
        parent::__construct("Circulo");
        $this->radio = $radio;
    }

    /**
     * Implementación del método abstracto area().
     * Calcula el área usando la fórmula matemática: pi * r²
     */
    public function area() {
        return pi() * pow($this->radio, 2);
    }

    /**
     * Implementación del método abstracto perimetro().
     * Calcula la circunferencia (perímetro) usando la fórmula: 2 * pi * r
     */
    public function perimetro() {
        return 2 * pi() * $this->radio;
    }

}
?>