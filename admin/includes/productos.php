   <?php
    include "php/conexion.php";

    $query="SELECT * FROM productos";
    $res=$db->query($query);
    
  ?>
 <div class="row">
    <div class="col s12">
      <div class="row">
    <div style="float: left;"><h2 class="header"> Productos </h2></div>    
     <div style="float: right; text-aling: center; margin-right: 50px;"> 
    <a href="index.php?pag=crear"><i class="medium mdi-content-add" style="color: red;" ></i></a>
      <br><h6><strong>Agregar</strong></h6>
    </div>
    </div>

      <table>
        <thead>
          <tr>
              <th data-field="name">Producto</th>
              <th data-field="id">Tipo de producto</th>
              <th data-field="edit">Editar</th>
              <th data-field="dele">Eliminar</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($fila=$res->fetch_array()) { ?>
          <tr>            
            <td> <?php  echo utf8_decode($fila["nombre"]); ?> </td>  
            <td> <?php  echo $fila["tipo"]; ?> </td> 
            <td> <a href="index.php?pag=actualizar&name=<?php  echo $fila['nombre']; ?>"> <i class="small mdi-content-create" style="color: red;"></i></a> </td> 
            <td> <a href="php/quitar.php?id=<?php echo $fila['nombre']; ?>"> <i class="small mdi-content-clear light" style="color: red;"></i> </a></td>          
          </tr>
          <?php } ?>
          
        </tbody>

      </table>


    </div>
  </div>

