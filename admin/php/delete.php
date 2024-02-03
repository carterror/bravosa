<?php

	session_start();
	include "conexion.php";

	$id= $_GET['id'];

	$tabla= $_GET['tabla'];


	$query="DELETE FROM $tabla WHERE id='$id'";

	$query=$db->query($query);

	if ($tabla=="noticias") {
		
			header("location: ../index.php?pag=noticias");

	}

	else {

	header("location: ../index.php?pag=usuarios");

	}

?>