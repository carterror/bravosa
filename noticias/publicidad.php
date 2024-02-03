  <?php
    include "php/conexion.php";

    $query="SELECT * FROM noticias";
    $res=$db->query($query);

    while ($fila=$res->fetch_array()) {

      $tipo= $fila["tipo"];

      if ($tipo == "Premios a la comunicacion y publicidad") {

  ?>

    <a href="#!" class="collection-item">(<?php echo utf8_decode($fila["anno"]); ?>): <?php echo utf8_decode($fila["noticia"]); ?><span class="badge">1</span></a>

   <?php } }?>