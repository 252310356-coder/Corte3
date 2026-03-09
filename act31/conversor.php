<?php
class conversor {
    public function Celcius_farenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    public function Farenheit_celcius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }
}
?>