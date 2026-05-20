<?php

require_once "Animal.php";

/**
 * Clase Aguila
 * * Representa aves rapaces con comportamiento aéreo.
 */
class Aguila extends Animal {
    public function __construct($nombre, $edad) {
        parent::__construct($nombre, $edad, "Águila", "Carnívoro", false);
    }

    public function mostrarInfo() {
        return "<h2>Información del Águila</h2>" .
               "<p><strong>Nombre:</strong> " . $this->getNombre() . "</p>" .
               "<p><strong>Edad:</strong> " . $this->getEdad() . " años</p>" .
               "<p><strong>Especie:</strong> " . $this->getEspecie() . "</p>" .
               "<p><strong>Alimentación:</strong> " . $this->getAlimentacion() . "</p>" .
               "<p><strong>Acuático:</strong> " . $this->getAcuatico() . "</p>" .
               "<p><strong>Consideraciones:</strong> " . $this->getConsideraciones() . "</p>";
    }

    public function emitirSonido() { return "¡Screech!"; }
    public function moverse() { return "El águila vuela majestuosamente por los cielos."; }
    public function dormir() { return "El águila duerme en su nido en las alturas."; }
    public function cazar() { return "El águila caza desde el aire con su aguda visión."; }
    public function socializar() { return "El águila suele ser territorial pero fiel a su pareja."; }
}