<?php
/**
 * Clase abstracta que define la estructura base para cualquier figura geométrica.
 * No se puede instanciar directamente (no puedes crear un objeto de tipo "Figura"), 
 * solo sirve como plantilla para otras clases que heredarán de ella.
 */
abstract class Figura {
    // Propiedad protegida, accesible solo desde esta clase y las clases hijas (herederas).
    protected $nombre;

    /**
     * Constructor que inicializa el nombre de la figura al crearla.
     * * @param string $nombre Nombre de la figura geométrica (ej. "Círculo").
     */
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Método getter para obtener el valor del nombre de la figura.
     * * @return string Nombre de la figura.
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Método setter para modificar el nombre de la figura.
     * * @param string $nombre Nuevo nombre de la figura.
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Método abstracto que obliga a cualquier clase hija a definir cómo calcular su área.
     * No tiene cuerpo (no lleva llaves {} con código interno).
     */
    abstract public function area();

    /**
     * Método abstracto que obliga a cualquier clase hija a definir cómo calcular su perímetro.
     * Al igual que area(), no tiene cuerpo.
     */
    abstract public function perimetro();

    /**
     * Método concreto (normal) que devuelve la información básica de la figura.
     * * @return string Cadena de texto con el nombre de la figura.
     */
    public function mostrar(){
        return "Figura: " . $this->nombre;
    }
}
?>