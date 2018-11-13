<?php



class PartidoPreguntas
{
  protected $id;
  protected $partId;
  protected $pregId;


  function __construct($id, $partId, $pregId)
  {
    // Getters y Setters:

    public function getId() {
      return $this->id;
    }
    public function setId($id) {
      $this->id = $id;
    }

    public function getPartId() {
      return $this->partId;
    }
    public function setPartId($partId) {
      $this->partId = $partId;
  }

    public function getPregId() {
      return $this->pregId;
    }
    public function setPregId($pregId) {
      $this->pregId = $pregId;
  }
}
