<?php

require_once "Animal.php";

/**
 * Clase Leon
 * * Especialización de Animal para representar felinos grandes.
 */
class Leon extends Animal {
    /**
     * Inicializa un León con valores predeterminados de especie y hábitat.
     */
    public function __construct($nombre, $edad) {
        parent::__construct($nombre, $edad, "León", "Carnívoro", false);
    }

    /**
     * Genera una ficha técnica en formato HTML.
     */
    public function mostrarInfo() {
        return "<h2>Información del León</h2>" .
               "<p><strong>Nombre:</strong> " . $this->getNombre() . "</p>" .
               "<p><strong>Edad:</strong> " . $this->getEdad() . " años</p>" .
               "<p><strong>Especie:</strong> " . $this->getEspecie() . "</p>" .
               "<p><strong>Alimentación:</strong> " . $this->getAlimentacion() . "</p>" .
               "<p><strong>Acuático:</strong> " . $this->getAcuatico() . "</p>".
               "<p><strong>Consideraciones:</strong> " . $this->getConsideraciones() . "</p>";
    }

    public function emitirSonido() { return "¡Roar!"; }
    public function moverse() { return "El león camina majestuosamente por la sabana."; }
    public function dormir() { return "El león duerme durante el día y es más activo por la noche."; }
    public function cazar() { return "El león caza en manada para atrapar a sus presas."; }
    public function socializar() { return "El león es un animal social que vive en grupos llamados manadas."; }
}