<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="bravo";

     $db = new mysqli($servername, $username, $password, $dbname);


	$tildes = $db->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
	
?> 
