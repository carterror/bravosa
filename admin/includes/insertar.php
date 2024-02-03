   <?php
    include "php/conexion.php";
    
  ?>

                      <div class="row">
                        <div style="float: left;" ><h3>Nuevo Producto</h3> </div>

                    </div> 
  <div class="row">

    <form class="col s12" method="post" action="php/insertar.php">
      <div class="row">
        <div class="input-field col s12">
        <input name="nombre" id="nombre" type="text" class="validate" length="79" maxlength="80" onKeyPress="return soloLetras(event)">
        <label for="nombre">Titulo</label>
        </div>

      </div>
      <div class="row">
        <div class="input-field col s12">
             <select class="browser-default" name="tipo">
              <option value="" disabled selected>Tipo de Noticia</option>
                  
                <option value="Premios a la calidad del producto">Premios a la calidad del producto</option>
                <option value="Premios al disenno de Stand">Premios al disenno de Stand</option>
                <option value="Premios a la comunicacion y publicidad">Premios a la comunicacion y publicidad</option>
 
            </select>    
        </div>
      </div>
      <br>
       <div class="row">
<button class="btn waves-effect waves-light" type="submit" onClick="pass()" name="php/registro.php">ENVIAR
          &nbsp; <i class="mdi-content-send"></i>
            </button>

    </form>
  </div>
        