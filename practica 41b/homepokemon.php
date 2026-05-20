<?php
require_once 'pokemon.php';

class HomePokemon extends Pokemon{
    //propiedades
    private string $hogar;

    //constructor
    public function __construct($nombre, $tipo, $nivel, $hogar){
        parent::__construct($nombre, $tipo, $nivel);
        $this->hogar = $hogar;
    }

    public function atacar(){
        return "{$this->nombre} usa un ataque de {$this->hogar}!!";
    }
}