<?php

	session_start();
	include "conexion.php";

		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$pass= md5($pass);

		$query = "SELECT * FROM autenticar WHERE usuario ='".$user."' AND password='".$pass."'";
		$query = $db->query($query);

		if ($row = mysqli_fetch_array($query)) {
			 $_SESSION["user"] = $row['usuario'];
			 $_SESSION['tipo'] = $row['tipo'];

			 header("location: ../index.php");
		}
		else{
			
			header("location: ../login.php?error=1");
		}
	

?>