<?php
require_once 'caja.php';        

$caja1 = new caja(2.5, 3.0, 4.0);

echo "El volumen de la caja es: " . $caja1->volumen() . "<br>";

echo "El área frontal de la caja es: " . $caja1->areaFrontal() . "<br>";
echo "El área lateral de la caja es: " . $caja1->areaLateral() . "<br>";
echo "El área superior de la caja es: " . $caja1->areaSuperior() . "<br>";
echo "El área total de la caja es: " . $caja1->areaTotal() . "<br>";

echo "El ancho de la caja es: " . $caja1->getancho() . "<br>";
echo "El alto de la caja es: " . $caja1->getalto() . "<br>";
echo "El largo de la caja es: " . $caja1->getlargo() . "<br>";

echo "Copiamos la caja a caja2...<br>";
//Se usa con 2 puntos porque el metodo es statico, no se necesita un objeto para usarlo, se puede usar la clase directamente por eso los 2 puntos
$caja2 = Caja::copiarCaja($caja1);
echo $caja2->__toString() . "<br>";

echo "Cajas mas grande y mas pequeña que la actual<br>";
$cajaMasGrande = $caja2->cajaMasGrande();
echo "Caja mas grande: " . $cajaMasGrande->__toString() . "<br>";
$cajaMasPequena = $caja2->cajaMasPequena();
echo "Caja mas pequeña: " . $cajaMasPequena->__toString() . "<br>"; 