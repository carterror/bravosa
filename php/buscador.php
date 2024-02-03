<?php

 include "conexion.php";

?>

<form action="index.php" method="get" >
<input tipy="text" name="palabra" value="<?php if (!empty($_GET['palabra'])) {echo $_GET['palabra'];}  ?>" >
<input type="submit" name="buscador" value="Buscar" hidden>

</form>

<?php

if (!empty($_GET['buscador'])) {

	$buscar=$_GET['palabra'];

	if (empty($buscar)) {

	}
	else{

		$query="SELECT * FROM productos WHERE nombre LIKE '%$buscar%'";

		 $query=$db->query($query); 

		  $total = mysqli_num_rows($query);

		  if($row = mysqli_fetch_array($query) ) {
		  
		 	echo "Resultado Para: $buscar";
		 	?>
		 	</br>
		 	<?php
		 	echo "Total de resultados: $total";
		 	?>
		 	</br>
		 	<?php

		 	do {
		 		?>

		 		(Nombre: <?php echo $row['nombre']; ?>)- <img width="200px" height="200px" alt="<?php echo $row['nombre']; ?>" src="<?php echo $row['imagen']; ?>">
		 		</br>

		 		<?php

		 	} while ($row = mysqli_fetch_array($query));

		  } else {
		  	echo "No se encontraron resultados para: $buscar";
		  }

		}
	}



?>