<?php

include "conexion.php";

$nombre=$_POST["nombre"];
$peso=$_POST["peso"];
$durabilidad=$_POST["durabilidad"];
$embalaje=$_POST["embalaje"];
$conservasion=$_POST["conservacion"];
$descripcion=$_POST["descripcion"];
$ingredientes=$_POST["ingredientes"];
$tipo=$_POST["tipo"]; 


//$foto = $_POST['foto'];


$ruta="../../images/".$tipo."/";
opendir($ruta);
$nom=$_FILES['foto']['name'];
$destino = $ruta.$nom;
copy($_FILES['foto']['tmp_name'], $destino);

$foto="images/".$tipo."/".$nom;


$resumen="<p>".$descripcion."<br>
  <br>Ingredientes:<br>"
  .$ingredientes.
  "<br><br>
  Peso:".$peso.".<br>
  Embalaje:".$embalaje."<br>
  Durabilidad:".$durabilidad.".<br>
  Conservacion:".$conservasion."&deg;C
    </p>";


$query="INSERT INTO productos(nombre, tipo, descripcion, imagen)  VALUES ('$nombre', '$tipo', '$resumen', '$foto')";

	$db->query($query);

	header("location: ../index.php?pag=productos");

?>
