<?php
abstract class Pokemon{
    //propiedades
    protected string $nombre;
    protected string $tipo;
    protected int $nivel;

    //constructor
    public function __construct($nombre, $tipo, $nivel){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->nivel = $nivel;
    }

    public function atacar(){
        return "{$this->nombre} usa un ataque genérico!!";
    }

}