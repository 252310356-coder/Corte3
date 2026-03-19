<?php

class Caja {
private float $ancho;
private float $alto;
private float $largo;

public function __construct(float $ancho, float $alto, float $largo) //Hasta aqui se llama cabecera de la funcion
{
    /**
     * Caja constructor.
     * @param float $ancho
     * @param float $alto
     * @param float $largo
     */
    $this->ancho = $ancho;
    $this->alto = $alto;
    $this->largo = $largo;
}

/**
 * @return float
 */
public function volumen(): float {
    return $this->ancho * $this->alto * $this->largo;   
}

/**
 * @return float
 */
public function areaFrontal(): float {
    return $this->ancho * $this->alto;
}

/**
 * @return float
 */
public function areaLateral(): float {
    return $this->alto * $this->largo;
}

/**
 * @return float
 */
public function areaSuperior(): float {
    return $this->ancho * $this->largo;
}

/**
 * @return float
 */
public function areaTotal(): float {
    return 2 * ($this->areaFrontal() + $this->areaLateral() + $this->areaSuperior());
}

/**
 * @return float
 */
public function getancho(): float {
    return $this->ancho;
}

/**
 * @param float $ancho
 */
public function setancho(float $ancho): void {
    $this->ancho = $ancho;
}

/**
 * @return float
 */
public function getalto(): float {
    return $this->alto;
}
/**
 * @param float $alto
 */
public function setalto(float $alto): void {
    $this->alto = $alto;
}

/**
 * @return float
 */
public function getlargo(): float {
    return $this->largo;
}

/**
 * @param float $largo
 */
public function setlargo(float $largo): void {
    $this->largo = $largo;
}

/**
 * Copiar la caja actual con las mismas propiedades.
 * @param Caja $otracaja
 * Es metodo de clase porque podriamos pedir cualquier caja
 */

public static function copiarCaja(Caja $otracaja): Caja {
    return new Caja(
        $otracaja->getancho(),
        $otracaja->getalto(),
        $otracaja->getlargo()
    );
}
/**
 * Crear una nueva caja un 25% mas grande que la caja actual.
 * @return Caja
 * Es un metodo de instancia porque se basa en las propiedades de la caja actual
 */
public function cajaMasGrande(): Caja {
    return new Caja(
    $nuevoAncho = $this->ancho * 1.25,
    $nuevoAlto = $this->alto * 1.25,
    $nuevoLargo = $this->largo * 1.25,
    );
}

/**
 * Crear una nueva caja un 25% mas pequeña que la caja actual.
 * @return Caja
 * Es un metodo de instancia porque se basa en las propiedades de la caja actual
 */

public function cajaMasPequena(): Caja {
    return new Caja(
    $nuevoAncho = $this->ancho * 0.75,
    $nuevoAlto = $this->alto * 0.75,
    $nuevoLargo = $this->largo * 0.75,
    );
}
    /** Devuelve una representacion en cadena de la caja
     * @return string
     */
public function __toString(): string {
        return "Caja: (Ancho: $this->ancho, Alto: $this->alto, Largo: $this->largo)";
    }
}
