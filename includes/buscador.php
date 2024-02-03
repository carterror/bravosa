<?php

 include "php/conexion.php";

?>
	<div class="row">
	<form action="index.php?pag=buscador" method="post" class="col s12">
		<div class="row">
        <div class="input-field col s6">
        <i class="mdi-action-search prefix"></i>
        <input type="search" onkeyup="showResult(this.value)" class="validate" id="icon_prefix" name="palabra" value="<?php if (!empty($_GET['palabra'])) {echo $_GET['palabra'];}  ?>" >
        <label for="icon_prefix">Buscador</label>
        <input type="submit" name="buscador" value="Buscar" hidden>
       </div>
        <div id="livesearch" class="buscador"></div>
    </form>
 </div>
        </div>

<div class="row">

<?php

if (!empty($_POST['buscador'])) {

	$buscar=$_POST['palabra'];

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

        <div class="col s6">
         <div class="card">
            <div class="card-image">
              <img alt="<?php echo $row['nombre']; ?>" src="<?php echo $row['imagen']; ?>">
              <span class="card-title" style="color: black;"></span>
            </div>
            <div class="card-content">
              <p><h4><?php echo utf8_decode($row['nombre']);  ?></h4></p>
            </div>
            <div class="card-action">
              <a href="index.php?pag=<?php echo $row['tipo']; ?>" style="color: red;">Ver m&aacute;s</a>
            </div>
          </div>
        </div>

          

		 		<?php

		 	} while ($row = mysqli_fetch_array($query));

		  } else {
		  	echo "No se encontraron resultados para: $buscar";
		  }

		}
	}

?>
    </div>