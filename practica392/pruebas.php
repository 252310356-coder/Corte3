<?php
require_once 'fraccion.php';

// Crear dos fracciones
$fraccion1 = new Fraccion(1, 2);
$fraccion2 = new Fraccion(3, 2); 
// Sumar las fracciones
echo $fraccion1->sumar($fraccion2) . "<br>"; 
//Resta
echo $fraccion1->restar($fraccion2) . "<br>"; 
//potencia
echo $fraccion1->potencia(2) . "<br>"; 
//Valor decimal
echo $fraccion1->fraccion_porcentaje() . "<br>"; 
//Multiplicación
echo $fraccion1->multiplicar($fraccion2) . "<br>"; 
//División
echo $fraccion1->dividir($fraccion2) . "<br>";

//Validar denominador 0

$fraccion3 = new Fraccion(1, 0); // Esto lanzará una excepción

echo $fraccion3; // No se ejecutará debido a la excepción lanzada en el constructor

echo $fraccion3->sumar($fraccion1); // Esto también lanzará una excepción debido al denominador cero en $fraccion3
echo $fraccion3->restar($fraccion1); // Esto también lanzará una excepción debido al denominador cero en $fraccion3
