<?php

require_once 'calculadora.php';

echo Calculadora::mostrarMensaje() . "<br>";

$calc = new Calculadora();
echo "Suma: " . $calc->sumar(5, 3) . "<br>";
echo "Resta: " . $calc->restar(5, 3) . "<br>";
echo "Multiplicación: " . $calc->multiplicar(5, 3) . "<br>";
echo "División: " . $calc->dividir(5, 0) . "<br>";
echo "División: " . $calc->dividir(5, 10) . "<br>";

echo "Clase conversor:<br>";
require_once 'conversor.php';
$conversor = new conversor();
echo "25 grados Celsius a Fahrenheit: " . $conversor->Celcius_farenheit(25) . " °F<br>";
echo "77 grados Fahrenheit a Celsius: " . $conversor->Farenheit_celcius(77) . " °C<br>";
?>