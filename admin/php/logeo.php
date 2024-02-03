<?php

	session_start();
	include "conexion.php";
	if (isset($_POST['enviar'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$pass= md5($pass);
		$query = "SELECT * FROM autenticar WHERE usuario ='".$user."' AND password='".$pass."'";
		$query = $db->query($query);

		if ($row = mysqli_fetch_array($query)) {
			 $_SESSION['user'] = $row['user'];
			 $_SESSION['pass'] = $row['pass'];
			 $_SESSION['id'] = $row['id'];
			 $_SESSION['tipo'] = $row['tipo'];

			 header("location: ../index.php");
		}
		else{
			echo utf8_decode("Usuario o contraseña incorrecto");
			header("refresh:2; ../login.php");
		}
	}

?>