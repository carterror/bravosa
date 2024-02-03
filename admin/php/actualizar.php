<?php

include "conexion.php";

$nombre=$_POST["nombre"];
$tipo=$_POST["tipo"];
$descripcion=$_POST["descripcion"];

$id=$_GET['name'];


$ruta="../../images/".$tipo."/";
opendir($ruta);
$nom=$_FILES['foto']['name'];
$destino = $ruta.$nom;
copy($_FILES['foto']['tmp_name'], $destino);

$foto="images/".$tipo."/".$nom;



$query="UPDATE productos SET nombre='$nombre', tipo='$tipo', descripcion='$descripcion', imagen='$foto' WHERE nombre='$id' ";


	$db->query($query);

	header("location: ../index.php?pag=productos");

?>