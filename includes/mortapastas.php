    <div class="row">

      <h2 class="header"> Mortadellas y Pastas </h2>


  <?php
    include "php/conexion.php";

    $query="SELECT * FROM productos";
    $res=$db->query($query);
    while ($fila=$res->fetch_array()) {

      $tipo= $fila["tipo"];

      if ($tipo == "Mortadellas y Pastas") {

  ?>

   <div id="test1" class="col s6" >     
    <div class="card" >
        <div class="card-image waves-effect waves-block waves-light" >
          <img class="" width="650" src="<?php echo $fila['imagen']; ?>">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"><?php echo $fila["nombre"]; ?><i class="mdi-navigation-more-vert right"></i></span>
          <p style="color:red;">Lic. San-2R 097/97-III</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"><?php echo $fila["nombre"]; ?> <i class="mdi-navigation-close right"></i></span>
          <p>

           <?php echo $fila["descripcion"]; ?>

         </p>
        </div>
    </div>
    </div>
    <?php } } ?>
  </div>
