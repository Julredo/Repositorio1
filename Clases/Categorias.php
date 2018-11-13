<?php
require_once("Clases/Categorias.php");

//

class Categorias extends Preguntas
{
  protected $id;
  protected $nombre;
  protected $color;
  protected $icono;
  function __construct($id, $nombre, $color, $icono)
  {
    // Getters y Setters:

    public function getId() {
      return $this->id;
    }
    public function setId($id) {
      $this->id = $id;
    }



    public function getNombre() {
      return $this->nombre;
    }
    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }



    public function getColor() {
      return $this->color;
    }
    public function setColor($color) {
      $this->color = $color;
    }

//Restricciones para el tipo de icono.

    public function getIcono() {
      return $this->color;
    }
    public function setIcono($color) {
      $this->color = $color;
    }


  }
}



 ?>
