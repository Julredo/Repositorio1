<?php

require_once("db.php");
require_once("User.php");

class BaseDeDatos extends DB {
	protected $conn;

//Conecta con la base de datos en mysql.User y pass podrian diferir.

	public function __construct() {
		$dsn = 'mysql:host=localhost;dbname=reg-login;
		charset=utf8mb4;port=3306';
		$user ="root";
		$pass = "root";

//Intenta entablar la conexion con la base y muestra un mensaje en caso de fallar.
		try {
		  $this->conn = new PDO($dsn, $user, $pass);
		} catch (Exception $e) {
		  echo "La conexion a la base de datos falló: " . $e->getMessage();
		}
	}

	function guardarUsuario(User $user) {

//IMPORTANTE. Cambiar nombres para que sean los mismos de la base de datos.

		$query = $this->conn->prepare("Insert into usuarios values(default, :mail, :pass,:activo,:nombre,:faceId, :avatar)");

		$query->bindValue(":mail", $user->getmail());
		$query->bindValue(":pass", $user->getPass());
		$query->bindValue(":activo", $user->getActivo());
    $query->bindValue(":nombre", $user->getNombre());
    $query->bindValue(":faceId", $user->getFaceId());
  	$query->bindValue(":avatar", $user->getAvatar());


		$query->execute();

		$id = $this->conn->lastInsertId();
		$user->setId($id);



		return $user;

	}

	function traerTodos() {

//IMPORTANTE. Cambiar el nombre al correspondiente de la base de datos.

		$query = $this->conn->prepare("Select * from usuarios");
		$query->execute();

		$usuariosFormatoArray = $query->fetchAll();

//Trae a usuarios por mail y luego en formato clase.

		$usuariosFormatoClase = [];

		foreach ($usuariosFormatoArray as $user) {
			$usuariosFormatoClase[] = new User($user["mail"], $user["pass"], $user["activo"], $user["nombre"], $user["faceId"],$user["avatar"], $user["id"]);
		}

		return $usuariosFormatoClase;
	}

	function traerPorMail($email) {
		$query = $this->conn->prepare("Select * from usuarios where mail = :mail");
		$query->bindValue(":mail", $mail);

		$query->execute();

		$usuarioFormatoArray = $query->fetch();

//verifica que los datos sean correctos.

		if ($usuarioFormatoArray) {
			$user = new User($usuarioFormatoArray["mail"], $usuarioFormatoArray["pass"], $usuarioFormatoArray["activo"], $usuarioFormatoArray["nombre"], $usuarioFormatoArray["faceId"], $usuarioFormatoArray["avatar"], $usuarioFormatoArray["id"]);
			return $user;
		} else {
			return NULL;
		}
	}
}

?>
