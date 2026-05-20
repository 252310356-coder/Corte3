<?php

require_once "Animal.php";

/**
 * Clase Tiburon
 * * Implementación de un depredador marino acuático.
 */
class Tiburon extends Animal {
    public function __construct($nombre, $edad) {
        parent::__construct($nombre, $edad, "Tiburón", "Carnívoro", true);
    }

    public function mostrarInfo() {
        return "<h2>Información del Tiburón</h2>" .
               "<p><strong>Nombre:</strong> " . $this->getNombre() . "</p>" .
               "<p><strong>Edad:</strong> " . $this->getEdad() . " años</p>" .
               "<p><strong>Especie:</strong> " . $this->getEspecie() . "</p>" .
               "<p><strong>Alimentación:</strong> " . $this->getAlimentacion() . "</p>" .
               "<p><strong>Acuático:</strong> " . $this->getAcuatico() . "</p>" .
               "<p><strong>Consideraciones:</strong> " . $this->getConsideraciones() . "</p>";
    }

    public function emitirSonido() { return "Glub glub"; }
    public function moverse() { return "El tiburón nada rápidamente por el océano."; }
    public function dormir() { return "El tiburon duerme en las profundidades del mar."; }
    public function cazar() { return "El tiburón caza peces y otros animales marinos."; }
    public function socializar() { return "El tiburón es un animal solitario."; }
}