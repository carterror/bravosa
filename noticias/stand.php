  <?php
    include "php/conexion.php";

    $query="SELECT * FROM noticias";
    $res=$db->query($query);

    while ($fila=$res->fetch_array()) {

      $tipo= $fila["tipo"];
      $annoact=date("Y"); 
       $anno= $fila['anno'];
       $conta=1;

             if ($tipo == "Premios al disenno de Stand") {

  ?> 

    <a href="#!" class="collection-item">(<?php echo $fila["anno"]; ?>): <?php echo utf8_decode($fila["noticia"]); ?><span class="badge"></span></a>

   <?php 


        if ($fila['anno'] = $annoact) {

          $conta= $conta+1;
          
        }

 } }?>