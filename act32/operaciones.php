<?php
class operaciones {
    private $num1;
    private $num2;
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function sumarSinParametros () {
        return $this->num1 + $this->num2;
    }

    public function sumarConParametros ($num1, $num2) {
        return $num1 + $num2;
    }

    public function multiplicarSinParametros () {
        return $this->num1 * $this->num2;
    }

    public function multiplicarConParametros ($num1, $num2) {
        return $num1 * $num2;
    }
}