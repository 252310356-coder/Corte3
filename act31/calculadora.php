<?php   
class Calculadora
{
    public function sumar($a, $b)
    {
        return $a + $b;
    }

    public function restar($a, $b)
    {
        return $a - $b;
    }

    public function multiplicar($a, $b)
    {
        return $a * $b;
    }

    public function dividir($a, $b)
    {
        try {
            if ($b == 0) {
                throw new Exception("No se puede dividir por cero.");
            }
            return $a / $b;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public static function mostrarMensaje()
    {
        return "¡Bienvenido a la calculadora!";
    }
}

?>