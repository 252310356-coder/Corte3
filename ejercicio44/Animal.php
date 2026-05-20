<?php

/**
 * Clase abstracta Animal
 * * Define la estructura base y el comportamiento común para todas las especies.
 * Al ser abstracta, no puede ser instanciada directamente.
 */
abstract class Animal {
    /** @var string Nombre del animal */
    private $nombre;
    /** @var int Edad en años */
    private $edad;
    /** @var string Especie biológica */
    private $especie;
    /** @var string Notas sobre cuidados o peligrosidad */
    private $consideraciones = "No hay consideraciones especiales para este animal.";
    /** @var string Tipo de dieta */
    private $Alimentacion;
    /** @var bool Define si el animal vive en el agua */
    private $Acuatico;

    /**
     * Constructor de la clase Animal
     * * @param string $nombre
     * @param int $edad
     * @param string $especie
     * @param string $Alimentacion
     * @param bool $Acuatico
     */
    public function __construct($nombre, $edad, $especie, $Alimentacion, $Acuatico) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->especie = $especie;
        $this->Alimentacion = $Alimentacion;
        $this->Acuatico = $Acuatico;
    }

    // --- MÉTODOS GETTERS ---

    public function getNombre() { return $this->nombre; }
    public function getEdad() { return $this->edad; }
    public function getEspecie() { return $this->especie; }
    
    /**
     * Obtiene las notas especiales del animal.
     * @return string
     */
    public function getConsideraciones() {
        if (empty($this->consideraciones)) {
            return "No hay consideraciones especiales para este animal.";
        }
        return $this->consideraciones;
    }

    public function getAlimentacion() { return $this->Alimentacion; }

    /**
     * Retorna una representación textual del hábitat.
     * @return string "Acuatico" o "Terrestre"
     */
    public function getAcuatico() {
        return $this->Acuatico ? "Acuatico" : "Terrestre";
    }

    // --- MÉTODOS SETTERS ---

    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setEdad($edad) { $this->edad = $edad; }
    public function setEspecie($especie) { $this->especie = $especie; }
    public function setConsideraciones($consideraciones) { $this->consideraciones = $consideraciones; }
    public function setAlimentacion($Alimentacion) { $this->Alimentacion = $Alimentacion; }
    public function setAcuatico($Acuatico) { $this->Acuatico = $Acuatico; }

    /**
     * Método concreto para simular alimentación.
     * @return string
     */
    public function comer() {
        return $this->nombre . " está comiendo.";
    }

    // --- MÉTODOS ABSTRACTOS (Obligatorios para las clases hijas) ---

    abstract public function emitirSonido();
    abstract public function mostrarInfo();
    abstract public function moverse();
    abstract public function dormir();
    abstract public function socializar();
    abstract public function cazar();
}