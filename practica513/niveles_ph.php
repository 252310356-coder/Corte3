<?php

$nivelesPH = [];
for($i = 1; $i <= 13; $i++) {
    $nivelesPH[] = round(mt_rand(40, 75)/10,1);

}

$suma= array_sum($nivelesPH);
$promedioOriginal = round($suma/count($nivelesPH),1);

$mayorDistancia=0;
$indiceMasDistante=0;

foreach ($nivelesPH as $indice => $valor)
{
    $distancia = abs($valor - $promedioOriginal);
    if ($distancia > $mayorDistancia) {
        $mayorDistancia = $distancia;
    }
    $valorDistante = $nivelesPH[$indiceMasDistante];
    $nivelesPH[$indiceMasDistante] = -1;
}

$sumaNueva = 0;
$contador = 0;
foreach ($nivelesPH as $valor) {
 if ($valor != -1) {
 $sumaNueva += $valor;
 $contador++;
 }
}
$promedioNuevo = $sumaNueva / $contador;

echo "Niveles de pH originales: " . implode(", ", $nivelesPH) . "<br>";
echo "Promedio original: $promedioOriginal<br>";
echo "Valor más distante: $valorDistante<br>";
echo "Niveles de pH con outlier eliminado: " . implode(", ", $nivelesPH) .
"<br>";
echo "Nuevo promedio: $promedioNuevo<br>";