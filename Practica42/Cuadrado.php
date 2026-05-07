<?php

class Cuadrado extends Rectangulo {

    public function __construct(float $lado) {
        parent::__construct("Cuadrado", $lado, $lado);
    }

}