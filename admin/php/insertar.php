<?php

include "conexion.php";

$noticia=$_POST["nombre"];
$ptipo=$_POST["tipo"]; 

$anno= date(Y);

$query="INSERT INTO noticias(anno, noticia, tipo)  VALUES ('$anno', '$noticia', '$ptipo')";


	$db->query($query);

	header("location: ../index.php?pag=noticias");

?>
