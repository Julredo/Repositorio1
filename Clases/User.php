<?php


class User
{
  protected $id;
  protected $nombre;
  protected $pass;
  protected $mail;
  protected $activo;
  protected $faceId;
  protected $avatar;


//activo es booleano. De momento lo dejo en true.
//id encripta la pass en la base de datos al crear usuario. Es null antes de crearla y pasa a tener valor encriptado luego.

  public function __construct($id = null, $pass, $mail, $activo = true, $faceId, $avatar) {
    if ($id == null) {
      $this->pass = password_hash($pass, PASSWORD_DEFAULT);
    }
    else {
      $this->pass = $pass;
    }

    $this->id = $id;
    $this->mail = $mail;
    $this->activo = $activo;
    $this->nombre = $nombre;
    $this->faceId = $faceId;
    $this->avatar = $avatar;
  }

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


  public function getPass() {
    return $this->pass;
  }
  public function setPass($pass) {
    $this->pass = $pass;
  }


  public function getMail() {
    return $this->mail;
  }
  public function setMail($mail) {
    $this->mail = $mail;
  }


  public function getActivo() {
    return $this->activo;
  }
  public function setActivo($activo) {
    $this->activo = $activo;
  }


  public function getFaceId() {
    return $this->faceID;
  }
  public function setFaceId($faceID) {
    $this->faceID = $faceID;
  }



  //  Esto retorna error al elegir un tipo de archivo incorrecto. Nombre de variables puede cambiar.


  public function guardarImagen($mail) {

		if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
		{

			$nombre=$_FILES["avatar"]["name"];
			$archivo=$_FILES["avatar"]["tmp_name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
				return "Error";
			}

			$miArchivo = dirname(__FILE__);
			$miArchivo = $miArchivo . "/../img/";
			$miArchivo = $miArchivo . $this->getEmail() . "." . $ext;

			move_uploaded_file($archivo, $miArchivo);
		}
	}

}


















 ?>
