<?php
abstract class Figura {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    abstract public function area();

    abstract public function perimetro();

    public function mostrar(){
        return "Figura: " . $this->nombre;
    }
}
