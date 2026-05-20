<?php
//forzar mostrar errores
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'pokemon.php';
require_once 'seapokemon.php';
require_once 'sportpokemon.php';
require_once 'homepokemon.php';
require_once 'skypokemon.php';


//se crean dos objetos de cada clase
$homePokemon1 = new HomePokemon("Pikachu", "Eléctrico", 10, "Casa");
$homePokemon2 = new HomePokemon("Bulbasaur", "Planta", 12, "Casa");
$sportPokemon1 = new SportPokemon("Machop", "Lucha", 15, "Boxeo");
$sportPokemon2 = new SportPokemon("Hitmonlee", "Lucha", 18, "Taekwondo");
$seaPokemon1 = new SeaPokemon("Squirtle", "Agua", 8, "Tsunami");
$seaPokemon2 = new SeaPokemon("Gyarados", "Agua/Volador", 20, "Tsunami");
$skyPokemon1 = new SkyPokemon("Zapdos", "Eléctrico/Volador", 25, "Tormenta");
$skyPokemon2 = new SkyPokemon("Moltres", "Fuego/Volador", 25, "Lluvia");

//se muestra el ataque de cada pokemon
echo $homePokemon1->atacar() . "<br>";
echo $homePokemon2->atacar() . "<br>";
echo $sportPokemon1->atacar() . "<br>";
echo $sportPokemon2->atacar() . "<br>";
echo $seaPokemon1->atacar() . "<br>";
echo $seaPokemon2->atacar() . "<br>";
echo $skyPokemon1->atacar() . "<br>";
echo $skyPokemon2->atacar() . "<br>";

//se demuestra polimorfismo
$pokemons = [$homePokemon1, $homePokemon2, $sportPokemon1, $sportPokemon2, $seaPokemon1, $seaPokemon2, $skyPokemon1, $skyPokemon2];
foreach($pokemons as $pokemon){
    echo $pokemon->atacar() . "<br>";
}   



