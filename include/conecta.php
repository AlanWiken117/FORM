<?php

$servidor ="localhost";
$usuario  ="root";
$password ="";
$bd ="datos_d";
$mysqli = mysqli_connect($servidor, $usuario, $password, $bd);

if ($mysqli->connect_error) {

	die("ERROR al conectar la base de datos" . $mysqli->connect_error());
    

}

?>