<?php
abstract class UsuarioCorreo {
 private static $contadorID = 1;
 private $id;
 private $nombre;
 private $apellidoPaterno;
 private $apellidoMaterno;
 private $edad;
 private $departamento;
 public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad,
     $departamento) {
 $this->id = self::$contadorID++;
 $this->nombre = $nombre;
 $this->apellidoPaterno = $apellidoPaterno;
 $this->apellidoMaterno = $apellidoMaterno;
 $this->edad = $edad;
 $this->departamento = $departamento;
 }

public function getNombre() {
return $this->nombre;
    }

public function getApellidoPaterno() {
return $this->apellidoPaterno;
    }

public function getApellidoMaterno() {
return $this->apellidoMaterno;
    }

 public function setNombre($nuevoNombre) {
 $this->nombre = $nuevoNombre;
 }
 public function setEdad($nuevaEdad) {
 $this->edad = $nuevaEdad;
 }
 public function setDepartamento($nuevoDepartamento) {
 $this->departamento = $nuevoDepartamento;
 }
 public function getID() {
 return $this->id;
 }
 public function getEdad() {
 return $this->edad;
 }
 public function getDepartamento() {
 return $this->departamento;
 }
 // Método abstracto para forzar que las clases hijas lo implementen
 /**
  * Obtiene el nombre completo del usuario.
  *
  * @return string El nombre completo del usuario.
  */
 abstract public function obtenerNombreCompleto();
}
?>