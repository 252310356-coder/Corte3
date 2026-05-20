<?php
require_once 'Docente.php';
require_once 'Alumno.php';
$docente1 = new Docente("Roberto", "Solis", "Robles", 45, "Sistemas", "M.C.", 15);
$docente2 = new Docente("Ana", "Lopez", "Martinez", 38, "Matemáticas", "Dr.", 10);
$alumno1 = new Alumno("Alonso", "Lira", "Espinoza", 20, "Sistemas", 9.3, 5);
$alumno2 = new Alumno("María", "Gomez", "Perez", 19, "Matemáticas", 8.7, 3);
echo $docente1->obtenerNombreCompleto() . "<br>";
echo $docente2->obtenerNombreCompleto() . "<br>";
echo $alumno1->obtenerNombreCompleto() . "<br>";
echo $alumno2->obtenerNombreCompleto() . "<br>";

$alumno3 = new Alumno("Carlos", "Ramirez", "Lopez", 21, "Sistemas", 8.5, 6);
$alumno4 = new Alumno("Sofia", "Fernandez", "Gomez", 18, "Matemáticas", 9.0, 2);
$docente3 = new Docente("Luis", "Hernandez", "Sanchez", 50, "Física", "Dr.", 20);
$docente4 = new Docente("Elena", "Martinez", "Diaz", 42, "Química", "M.C.", 18);

echo $alumno3->obtenerNombreCompleto() . "<br>";
echo $alumno4->obtenerNombreCompleto() . "<br>";
echo $docente3->obtenerNombreCompleto() . "<br>";
echo $docente4->obtenerNombreCompleto() . "<br>";
?>