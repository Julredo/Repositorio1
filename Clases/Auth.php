<?php

require_once("db.php");

// Clase Autorizadora. Crea sesion y cookies. Destruye la sesion al desloguearse.

class Auth {
	public function __construct() {

//Inicia sesion.

		session_start();


//Recuerda por cookies.

		if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
			$_SESSION["logueado"] = $_COOKIE["logueado"];
		}
	}

//funcion Loguear (Pide mail).

	public function loguear($mail) {
		$_SESSION["logueado"] = $mail;
	}

	public function estaLogueado() {
		return isset($_SESSION["logueado"]);
	}


// Si se loguea el usuario correctamente este cuenta como logueado(sesion).

	public function usuarioLogueado(DB $db) {
		if ($this->estaLogueado()) {
			$mail = $_SESSION["logueado"];
			return $db->traerPorMail($mail);
		} else {
			return NULL;
		}

	}


//Al desloguarse se destruyen las cookies(-1).

	public function logout() {
		session_destroy();
		setcookie("logueado", "", -1);
	}


//Funcion recordame. Dura 1 hora(3600 ms). Se puede modificar.

  public function recordame($mail) {
		setcookie("logueado", $mail, time() + 3600);
	}
}

?>
