<?php
require_once 'pokemon.php';

class SeaPokemon extends Pokemon{
    //propiedades 
    private string $agua;

    //constructor
    public function __construct($nombre, $tipo, $nivel, $agua){
        parent::__construct($nombre, $tipo, $nivel);
        $this->agua = $agua;
    }

    public function atacar(){
        return "{$this->nombre} usa un ataque de {$this->agua}!!";
    }
}