<?php

class Preguntas
{
  protected $preguntas;
  protected $categoria_Id;
  function __construct($preguntas, $categoria_Id)
  {
  $this->preguntas = $preguntas;
  $this->categoria_Id = $categoria_Id;
  }

//Getters y Setters.

  public function getPreguntas() {
    return $this->preguntas;
  }
  public function setPreguntas($preguntas) {
    $this->preguntas = $preguntas;
  }


  public function getCategoria_Id() {
    return $this->categoria_Id;
  }
  public function setNombre($categoria_Id) {
    $this->categoria_Id = $categoria_Id;
  }
}






 ?>
