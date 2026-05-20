<?php
require_once 'UsuarioCorreo.php';
class Alumno extends UsuarioCorreo {
 private $promedio;
 private $semestre;
 public function __construct(
	 $nombre,
	 $apellidoPaterno,
	 $apellidoMaterno,
	 $edad,
	 $departamento,
	 $promedio,
	 $semestre
 ) {
	 parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
	 $this->promedio = $promedio;
	 $this->semestre = $semestre;
 }

 public function setPromedio($nuevoPromedio) {
	 $this->promedio = $nuevoPromedio;
 }

 public function setSemestre($nuevoSemestre) {
	 $this->semestre = $nuevoSemestre;
 }

 public function obtenerNombreCompleto() {
	 return "Alumno Semestre: {$this->semestre} Nombre completo: {$this->getNombre()} Apellido Paterno: {$this->getApellidoPaterno()} Apellido Materno: {$this->getApellidoMaterno()}";
 }
}
?>