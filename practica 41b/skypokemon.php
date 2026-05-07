<?php
require_once 'pokemon.php';

class skyPokemon extends Pokemon{
    //propiedades 
    private string $clima;

    //constructor
    public function __construct($nombre, $tipo, $nivel, $clima){
        parent::__construct($nombre, $tipo, $nivel);
        $this->clima = $clima;
    }

    public function atacar(){
        return "{$this->nombre} usa un ataque de {$this->clima}!!";
    }
}