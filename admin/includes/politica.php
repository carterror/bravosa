<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body  >
         <div id="flow" class="section scrollspy"  >
          <h2 class="header">
          <?php
          include "php/conexion.php";

          $consul = mysqli_query($link, "SELECT * FROM contenido WHERE id='2'");

           while ($fila= mysqli_fetch_array($consul)) {

           echo $fila["titulo"];

             ?>
            </h2>
           <a id="flow-toggle" class="btn waves-effect waves-light" style="background-color: #ff3d00; font-size: 20px;">Lupa
              <i class="Medium mdi-action-search"></i>
            </a>
          <div id="flow-text-demo" class="card-panel" style="background-image: url('banner/fondo1.jpg');">

           <?php echo $fila["descripcion"];  ?>
          </div>
             <?php }  ?>
          <br>
         </div>

</body>
</html>