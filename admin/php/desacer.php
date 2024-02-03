<?php

	session_start();
	include "conexion.php";

	$id= $_GET['id'];

	$query="DELETE FROM noticias WHERE id='$id'";

	$query=$db->query($query);

	header("location: ../index.php?pag=usuarios");
?>