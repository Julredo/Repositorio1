<?php



class UsuarioPartidas
{
  protected $usuarioId;
  protected $partidaID;
  protected $puntaje;


  function __construct($usuarioId, $partidaID, $puntaje)
  {
    // Getters y Setters:

    public function getUsuarioId() {
      return $this->usuarioId;
    }
    public function setUsuarioId($usuarioId) {
      $this->usuarioId = $usuarioId;
    }

    public function getPartidaId() {
      return $this->partidaId;
    }
    public function setPartidaId($partidaId) {
      $this->partidaId = $partidaId;
  }

    public function getPuntaje() {
      return $this->puntaje;
    }
    public function setPuntaje($puntaje) {
      $this->puntaje = $puntaje;
  }
}
