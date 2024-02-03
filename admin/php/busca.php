<?php

	/*include "conexion.php";

	$bus = $_POST["busca"];

$consul = mysql_query("SELECT * FROM contenido");

   while ($fila= mysql_fetch_array($consul)) {

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