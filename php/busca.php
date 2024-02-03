<?php

	/*include "conexion.php";

	$bus = $_POST["busca"];

$consul = $mysqli->query("SELECT * FROM contenido");

   while ($fila= $consul->fetch_assoc()) {

	$buscado=$fila["descripcion"];

}*/
if (preg_match("Este", "Este es un curso de video2brain"))
{

	echo "Existe una coindidencia";

}

else 
{
	echo "No existe una coindidencia";

}




?>