<?php
require_once 'pokemon.php';

class SportPokemon extends Pokemon{
    //propiedades
    private string $deporte;

    //constructor
    public function __construct($nombre, $tipo, $nivel, $deporte){
        parent::__construct($nombre, $tipo, $nivel);
        $this->deporte = $deporte;
    }

    public function atacar(){
        return "{$this->nombre} usa un ataque de {$this->deporte}!!";
    }
}