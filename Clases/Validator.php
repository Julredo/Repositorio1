<?php

//Valida informacion y muestra errores en caso de ser incorrecto.
//Las validaciones son Placeholder. Modificarlo luego.
//Esto toma en cuenta que el login pide mail y pass.No toma coincidencias de nombre de usuario.

require_once("db.php");

class Validator {
	function validarLogin($informacion, DB $db) {
		$errores = [];


//trim elimina los espacios. For each recorre los datos.

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}

//Los mensajes de error se pueden modificar luego de $errores.

		if ($informacion["mail"] == "") {
			$errores["mail"] = "Complete este espacio con su correo.";
		}

//Revisa que sea de formato mail.

		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "Ingrese un mail valido";

//Revisa que el usuario se encuentre en la base de datos

    } else if ($db->traerPorMail($informacion["mail"]) == NULL) {
			$errores["mail"] = "El usuario no se encuentra en la base de datos.";
		}

		$user = $db->traerPorMail($informacion["mail"]);

		if ($informacion["pass"] == "") {
			$errores["pass"] = "Rellene este espacio con su contraseña.";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($informacion["pass"], $usuario->getPassword()) == false) {
				$errores["pass"] = "La contraseña no verifica";
			}
		}



		return $errores;
	}

	function validarInformacion($informacion, DB $db) {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}

//Caracteres minimos de usuario.

		if (strlen($informacion["user"]) <= 5) {
			$errores["user"] = "Su usuario debe tener al menos 5 caracteres.";
		}

		if ($informacion["mail"] == "") {
			$errores["mail"] = "Complete este espacio con su correo.";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "El mail tiene que ser un mail";
		} else if ($db->traerPorMail($informacion["email"]) != NULL) {
			$errores["mail"] = "Ingrese un mail valido.";
		}

		if ($informacion["pass"] == "") {
			$errores["pass"] = "Rellene este espacio con su contraseña.";
		}

		if ($informacion["RePass"] == "") {
			$errores["RePass"] = "Vuelva a ingresar la contraseña.";
		}

		if ($informacion["pass"] != "" && $informacion["RePass"] != "" && $informacion["pass"] != $informacion["RePass"]) {
			$errores["pass"] = "Las contraseñas deben coincidir.";
		}

//En caso de que haya un error, se retornara.
		return $errores;
	}
}

?>
