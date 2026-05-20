<?php

require_once "Animal.php";
require_once "Leon.php";
require_once "Aguila.php";
require_once "Serpiente.php";
require_once "Tiburon.php";

 $leon1 = new Leon("Simba", 5, "León", "Carnívoro", false);
 $aguila1 = new Aguila("Sky", 3, "Águila", "Carnívoro", false);
 $tiburon1 = new Tiburon("Bruce", 8, "Tiburón", "Carnívoro", true);
 $serpiente1 = new Serpiente("Kaa", 2, "Serpiente", "Carnívoro", false);

 $leon1->setConsideraciones("No acercarse a sus crias, demasiado territorial y agresivo");
 $tiburon1->setConsideraciones("Si se acerca demasiado al cuidador, una mano en el ocico puede ayudar a evitar un ataque");
 $serpiente1->setConsideraciones("No es venenosa, pero la mordida puede ser dolorosa, no manipularla sin supervisión");
 $leon2 = new Leon("Nala", 4, "León", "Carnívoro", false);

$animales = [
    $leon1,
    $aguila1,
    $tiburon1,
    $serpiente1,
    $leon2
];

foreach ($animales as $animal) {
 // Polimorfismo: cada animal muestra su información de manera diferente
 //completar el código para mostrar la información de cada animal
 echo $animal->mostrarInfo();
 echo "<p><strong>Sonido:</strong> " . $animal->emitirSonido() . "</p>";
    echo "<p><strong>Movimiento:</strong> " . $animal->moverse() . "</p>";
    echo "<p><strong>Hábito de sueño:</strong> " . $animal->dormir() . "</p>";
    echo "<p><strong>Hábito de caza:</strong> " . $animal->cazar() . "</p>";
    echo "<p><strong>Socialización:</strong> " . $animal->socializar() . "</p>";
    // Verificar si el animal es una serpiente para mostrar información adicional sobre el veneno
    if ($animal instanceof Serpiente) {
        echo "<p><strong>Veneno de serpiente:</strong> " . $animal->Veneno() . "</p>";
    }
 echo "<hr>";
}
?>