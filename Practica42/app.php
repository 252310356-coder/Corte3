<head>
    <title>Practica 4.2</title>
</head>
<body>

<?php
require_once "Figura.php";
require_once "Circulo.php";
require_once "Rectangulo.php";
require_once "Triangulo.php";
require_once "Cuadrado.php";

$figuras = [
    new Circulo(5),
    new Rectangulo("Rectángulo", 4, 6),
    new Triangulo(4, 5),
    new Cuadrado(4)
];
foreach ($figuras as $figura) {
    echo $figura->mostrar() . "<br>";
    echo "Área: " . $figura->area() . "<br>";
    echo "Perímetro: " . $figura->perimetro() . "<br><br>";
}