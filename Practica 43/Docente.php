<?php
require_once 'UsuarioCorreo.php';

class Docente extends UsuarioCorreo {
 private $grado_academico;
 private $antiguedad;
 public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad,
$departamento, $grado_academico, $antiguedad)

{
 parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad,
$departamento);
 $this->grado_academico = $grado_academico;
 $this->antiguedad = $antiguedad;
 }

 public function setGradoAcademico($nuevoGrado) {
 $this->grado_academico = $nuevoGrado;
 }

 public function setAntiguedad($nuevaAntiguedad) {
 $this->antiguedad = $nuevaAntiguedad;
 }

 public function obtenerNombreCompleto() {
 return "Docente: {$this->getNombre()} {$this->getApellidoPaterno()} {$this->getApellidoMaterno()} Grado académico: {$this->grado_academico} Antigüedad: {$this->antiguedad} años";
 }

}
?>      