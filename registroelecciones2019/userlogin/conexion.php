<?php 
    $mysqli = new mysqli('localhost','root','','bd_registroelecciones');
	if ($mysqli->connect_errno) 
	{
		mysqli_set_charset($mysqli,"utf8");
		echo "Error al conectarse con MYSQL debido al error: ".$mysqli->connect_error;
    }
?>