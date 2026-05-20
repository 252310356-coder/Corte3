<?php
$misNumeros = [];
for ($i = 0; $i < 15; $i++) {
 $misNumeros[$i] = rand(1, 100);
}

print_r($misNumeros);
echo "<br>";

echo "Listado de numeros con foreach: <br>";
foreach ($misNumeros as $numero) {
    echo $numero . "<br>";
}
echo "Listado de numeros con for: <br>";
for ($i = 0; $i < count($misNumeros); $i++) {
    echo $misNumeros[$i] . "<br>";
}

function suma_total ($numeros): int {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

echo "Suma total de los numeros: " . suma_total($misNumeros) . "<br>";

function suma_pares ($numeros): int {
    $suma = 0;
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

echo "Suma de los numeros pares: " . suma_pares($misNumeros) . "<br>";

function suma_impares ($numeros): int {
    $suma = 0;
    foreach ($numeros as $numero) {
        if ($numero % 2 != 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

echo "Suma de los numeros impares: " . suma_impares($misNumeros) . "<br>";