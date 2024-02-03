<?php

include "conexion.php";

$Pnombre=$_POST["nombre"];
$Papellido=$_POST["apellido"];
$Puser=$_POST["usuario"];
$Ppass=$_POST["password"];;
$Pmail=$_POST["email"];
$ptipo=$_POST["tipo"]; 

$Ppass= md5($Ppass);

$query="INSERT INTO autenticar(nombre, apel, tipo, usuario, password, email)  VALUES ('$Pnombre', '$Papellido', '$ptipo', '$Puser', '$Ppass', '$Pmail')";


	$db->query($query);

	header("location: ../index.php?pag=usuarios");

?>
