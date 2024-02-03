<?php
	session_start();
	include "config.php";
	if (isset($_SESSION['user'])) {
		
		session_destroy();
		header("location: ../../login.php");

	}
	else{

		echo "Error";
	}
	

?>