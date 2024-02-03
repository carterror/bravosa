         <div id="flow" class="section scrollspy">
          <h2 class="header">
          <?php
          include "php/conexion.php";

          $consul = mysql_query("SELECT * FROM contenido WHERE id='1'");

           while ($fila= mysql_fetch_array($consul)) {

           echo $fila["titulo"];

             ?>
            </h2>
           <a id="flow-toggle" class="btn waves-effect waves-light" style="background-color: #ff3d00; font-size: 20px;">Lupa
              <i class="Medium mdi-action-search"></i>
            </a>
          <div id="flow-text-demo" class="card-panel">

           <?php echo $fila["descripcion"];  ?>
          </div>
             <?php }  ?>
          <br>
         </div>

         <script type="text/javascript">

alert("Pagina en CONTRUCCION");


</script>