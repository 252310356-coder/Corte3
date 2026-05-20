<!DOCTYPE html>
<head>
    <title>Practica 4.2</title>
</head>
<body>

<?php
// Se importan todos los archivos donde se definen las clases.
require_once "Figura.php";
require_once "Circulo.php";
require_once "Rectangulo.php";
require_once "Triangulo.php";
require_once "Cuadrado.php";

// Se crea un arreglo (array) que almacena diferentes objetos de tipo Figura.
// PHP permite guardar objetos hijos en un arreglo del tipo padre debido al polimorfismo.
$figuras = [
    new Circulo(5),
    new Rectangulo("Rectángulo", 4, 6),
    new Triangulo(4, 5),
    new Cuadrado(4)
];

// Se recorre el arreglo de figuras usando un bucle foreach.
foreach ($figuras as $figura) {
    // Muestra el nombre de la figura (ej. "Figura: Círculo").
    echo $figura->mostrar() . "<br>";
    
    // Calcula e imprime el área usando el método de cada clase específica.
    echo "Área: " . $figura->area() . "<br>";
    
    // Calcula e imprime el perímetro usando el método de cada clase específica.
    echo "Perímetro: " . $figura->perimetro() . "<br><br>";
}
?>

</body>
</html>