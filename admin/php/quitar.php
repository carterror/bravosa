<?php

	session_start();
	include "conexion.php";

	$id= $_GET['id'];


	$query="DELETE FROM productos WHERE nombre='$id'";

	$query=$db->query($query);

	header("location: ../index.php?pag=productos");
?>