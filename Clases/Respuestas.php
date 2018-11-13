<?php

require_once("Clases/Preguntas.php");

class Respuestas extends Preguntas
{
  protected $id;
  protected $respuestas;

  function __construct($id, $respuestas)
  {
    // Getters y Setters:

    public function getId() {
      return $this->id;
    }
    public function setId($id) {
      $this->id = $id;
    }

    public function getRespuestas() {
      return $this->respuestas;
    }
    public function setRespuestas($respuestas) {
      $this->respuestas = $respuestas;
  }
}





 ?>
