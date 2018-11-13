<?php

require_once("Clases/User.php");

class Respuestas extends User
{
  protected $id;
  protected $fecha;
  protected $finalizo;
  protected $ganador;


  function __construct($id, $fecha, $finalizo, $ganador)
  {
    // Getters y Setters:

    public function getId() {
      return $this->id;
    }
    public function setId($id) {
      $this->id = $id;
    }

    public function getFecha() {
      return $this->fecha;
    }
    public function setFecha($fecha) {
      $this->fecha = $fecha;
  }

    public function getFinalizo() {
      return $this->finalizo;
    }
    public function setFinalizo($finalizo) {
      $this->finalizo = $finalizo;
  }

    public function getGanador() {
      return $this->fecha;
    }
    public function setGanador($ganador) {
      $this->ganador = $ganador;
  }
}
