<?php
$colores = ["rojo", "verde", "azul", "amarillo", "morado"];
foreach ($colores as $color) {
    echo $color . "<br>";
}
echo "<br>";
echo "Primer color" . $colores[0] . "<br>";
echo "Ultimo color" . $colores[(count($colores) - 1)] . "<br>";
echo "Cantidad total de colores" . count($colores) . "<br>";
echo "<br>";

$persona = [
    "nombre" => "Juan",
    "edad" => 21,
    "ciudad" => "Madrid",
    "email" => "juan@example.com",
    "carrera" => "Ingeniería",
    "activo" => true
];



foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}
echo "<br>";

$persona ["edad"] = 22;
echo "Edad cambiada de la persona: " . $persona["edad"] . "<br>";
$colores [0] = "Lila";
echo "Primer color cambiado: " . $colores[0] . "<br>";

echo "Print_r de la persona: <br>";
print_r($persona);
?>