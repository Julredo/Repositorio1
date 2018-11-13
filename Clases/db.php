<?php

require_once("user.php");

// Guarda y trae usuarios en la base de datos.Pide user y mail.

abstract class DB {
	public abstract function guardarUsuario(User $user);
	public abstract function traerPorMail($mail);
	public abstract function traerTodos();
}

?>
