   <?php
    include "php/conexion.php";

    $query="SELECT * FROM autenticar";
    $res=$db->query($query);
    

  ?>
 <div class="row">
    <div class="col s12">
           <div class="row">
    <div style="float: left;"><h2 class="header"> Usuarios </h2></div>    
     <div style="float: right; text-aling: center; margin-right: 50px;"> 
    <a href="index.php?pag=agregar"><i class="medium mdi-social-person-add" style="color: red;"></i></a>
      <br><h6><strong>Agregar</strong></h6>
    </div>
    </div> 

      <table>
        <thead>
          <tr>
              <th data-field="name">Nombre</th>
              <th data-field="tipo">Tipo de cuenta</th>
              <th data-field="usuario">Usuario</th>
              <th data-field="coreo">Correo</th>
              <th data-field="edit">Editar</th>
              <th data-field="dele">Eliminar</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($fila=$res->fetch_array()) { ?>
          <tr>            
            <td> <?php  echo $fila["nombre"]; ?> </td>  
            <td> <?php  echo $fila["tipo"]; ?> </td> 
            <td> <?php  echo $fila["usuario"]; ?> </td> 
            <td> <?php  if ($fila["email"]=="") { echo "No existe correo"; } else{ echo $fila["email"]; } ?> </td> 
            <td> <a href="index.php?pag=editar&id=<?php echo $fila['id']; ?>"> <i class="small mdi-social-people" style="color: red;"></i></a> </td> 
            <td> <a href="php/delete.php?tabla=autenticar&id=<?php echo $fila['id']; ?>"> <i class="small mdi-social-person-outline" style="color: red;"></i> </a></td>          
          </tr>
          <?php } ?>
          
        </tbody>
        
      </table>

    </div>
  </div>

