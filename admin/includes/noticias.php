   <?php
    include "php/conexion.php";

    $query="SELECT * FROM noticias";
    $res=$db->query($query);
    
  ?>
 <div class="row">
    <div class="col s12">
      <div class="row">
    <div style="float: left;"><h2 class="header"> Noticias </h2></div>    
     <div style="float: right; text-aling: center; margin-right: 50px;"> 
    <a href="index.php?pag=insertar"><i class="medium mdi-content-add" style="color: red;" ></i></a>
      <br><h6><strong>Agregar</strong></h6>
    </div>
    </div>

      <table>
        <thead>
          <tr>
              <th data-field="anno">A&ntilde;o</th>
              <th data-field="titulo">Titulo</th>
              <th data-field="tipo">Tipo</th>
              <th data-field="dele">Eliminar</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($fila=$res->fetch_array()) { ?>
          <tr>            
            <td> <?php  echo $fila["anno"]; ?> </td>  
            <td> <?php  echo utf8_decode($fila["noticia"]); ?> </td>
            <td> <?php  echo $fila["tipo"]; ?> </td> 
            <td> <a href="php/delete.php?tabla=noticias&id=<?php echo $fila['id']; ?>"> <i class="small mdi-content-clear light" style="color: red;"></i> </a></td>          
          </tr>
          <?php } ?>
          
        </tbody>

      </table>


    </div>
  </div>

