<?php

include "conexion.php";

$contador = 0;
 
$usuar=$_POST["user"];
$sinpass=$_POST["password"];
$pass=md5($sinpass);

$query = "SELECT * FROM autenticar WHERE usuario=$usuar AND password=$pass";

$res=$db->query($query);

while($fila=mysqli_fetch_array($res)) {

 header("location: ../index.php");

 $contador++;

}

	if ($contador == 0) {

		header("location: ../index.php?pag=error1");
	}



?>