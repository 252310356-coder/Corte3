<?php
namespace App\Calculo;
class IntegradorNumerico {
 private float $inicio; // Límite inferior (segundos)
 private float $fin; // Límite superior (segundos)
 private int $pasos; // Precisión (n subintervalos)
 private int $tipoCarga; // Tipo de carga (1: Normal, 2: Constante, 3: Fuerte)
 public function __construct(float $a, float $b, int $n = 1000 , int $tipoCarga = 1) {
 if ($a >= $b) {

 throw new \InvalidArgumentException("El tiempo inicial debe ser menor al
final.");

 }
 if ($n <= 0) {

 throw new \InvalidArgumentException("La precisión (n) debe ser un número
positivo.");

 }

 $this->inicio = $a;
 $this->fin = $b;
 $this->pasos = $n;
 $this->tipoCarga = $tipoCarga;

 }

 /**
 * Modela la función de potencia P(t) = t^2 + 2t (Ejemplo de carga creciente)
 * En informática, esto representaría los Watts consumidos.
 */

 private function funcionPotencia(float $t): float {
 switch ($this->tipoCarga) {
 case 1: // Normal: P(t) = 2t + 5
 return 2 * $t + 5;
 case 2: // Constante: P(t) = 5
 return 5;
 case 3: // Fuerte: P(t) = t^2
 return pow($t, 2);
 }
    return 0; // Valor por defecto (no debería ocurrir)
    }

 public function calcularEnergiaTotal(): float {
 $h = ($this->fin - $this->inicio) / $this->pasos;

 $suma = ($this->funcionPotencia($this->inicio) + $this->funcionPotencia($this->fin)) / 2;

 for ($i = 1; $i < $this->pasos; $i++) {
 $t_i = $this->inicio + $i * $h;
 $suma += $this->funcionPotencia($t_i);
 }

 return $suma * $h;
    }
}