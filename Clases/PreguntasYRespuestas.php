<?php



class PreguntasYRespuestas
{
  protected $Id;
  protected $preguntaId;
  protected $respuestaId;
  protected $correcta;


  function __construct($Id, $preguntaId, $respuestaId, $correcta)
  {
    // Getters y Setters:

    public function getId() {
      return $this->Id;
    }
    public function setId($usuarioId) {
      $this->Id = $Id;
    }

    public function getPreguntaId() {
      return $this->preguntaId;
    }
    public function setPreguntaId($preguntaId) {
      $this->preguntaId = $preguntaId;
  }

    public function getRespuestaId() {
      return $this->respuestaId;
    }
    public function setRespuestaId($respuestaId) {
      $this->respuestaId = $respuestaId;
  }

    public function getCorrecta() {
      return $this->correcta;
    }
    public function setCorrecta($correcta) {
      $this->correcta = $correcta;
  }

}
