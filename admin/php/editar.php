<?php

include "conexion.php";

$Pnombre=$_POST["nombre"];
$Papellido=$_POST["apellido"];
$Puser=$_POST["usuario"];
$Ppass=$_POST["password"];
$Pmail=$_POST["email"];
$ptipo=$_POST["tipo"]; 
$id=$_GET['id'];


$query="UPDATE autenticar SET nombre='$Pnombre', apel='$Papellido', tipo='$ptipo', usuario='$Puser', password='$Ppass', email='$Pmail' WHERE id='$id' ";


	$db->query($query);

//	header("location: ../index.php?pag=usuarios");

?>