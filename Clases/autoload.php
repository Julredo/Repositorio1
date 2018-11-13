<?php
//Autoload.Agregar las clases aqui.
include_once("Clases/User.php");
include_once("Clases/Auth.php");
include_once("Clases/db.php");
include_once("Clases/Validator.php");
include_once("Clases/Preguntas.php");
include_once("Clases/Categorias.php");
include_once("Clases/Respuestas.php");
include_once("Clases/Partida.php");
include_once("Clases/PartidaPreguntas.php");
include_once("Clases/UsuarioPartidas.php");
include_once("Clases/PreguntasYRespuestas.php");




//Para crear:


$base = new BD();
$auth = new Auth();
$validator = new Validator();




 ?>
