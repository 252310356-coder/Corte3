<?php

require_once "Animal.php";

/**
 * Clase Serpiente
 * * Representa reptiles terrestres. Incluye un método único para veneno.
 */
class Serpiente extends Animal {
    public function __construct($nombre, $edad) {
        parent::__construct($nombre, $edad, "Serpiente", "Carnívoro", false);
    }

    public function mostrarInfo() {
        return "<h2>Información de la Serpiente</h2>" .
               "<p><strong>Nombre:</strong> " . $this->getNombre() . "</p>" .
               "<p><strong>Edad:</strong> " . $this->getEdad() . " años</p>" .
               "<p><strong>Especie:</strong> " . $this->getEspecie() . "</p>" .
               "<p><strong>Alimentación:</strong> " . $this->getAlimentacion() . "</p>" .
               "<p><strong>Acuático:</strong> " . $this->getAcuatico() . "</p>" .
               "<p><strong>Consideraciones:</strong> " . $this->getConsideraciones() . "</p>";
    }

    public function emitirSonido() { return "Ssssss"; }
    public function moverse() { return "La serpiente se desplaza reptando por el suelo."; }
    public function dormir() { return "La serpiente duerme en escondites o madrigueras."; }
    public function cazar() { return "La serpiente acecha y utiliza su cuerpo o colmillos para cazar."; }
    public function socializar() { return "La serpiente es un animal solitario."; }

    /**
     * Método específico de la clase Serpiente.
     */
    public function Veneno() {
        return "La serpiente puede ser venenosa dependiendo de la especie.";
    }
}