        
               <?php

               include "../php/conexion.php";

               $id=$_GET['name'];

               $query="SELECT * FROM productos WHERE nombre='$id'";

               $res=$db->query($query);

               while ($fila=$res->fetch_array()) { 

               ?>   
               <div class="row">
                    <div class="modal-content">
                      <form class="col s12" name="regi" action="php/actualizar.php?name=<?php echo $_GET['name']; ?>" method="post" enctype="multipart/form-data">
                       <div style="float: left;" ><h3>Editar Producto</h3> </div>
                      <div style="float: right; margin: 20px;"><button class="btn waves-effect waves-light" type="submit" onClick="pass()" name="php/registro.php">ENVIAR
                       &nbsp; <i class="mdi-content-send"></i>
                      </button></div>
                        <p>
                       <div class="row">
                             <div class="input-field col s12">
                              <input name="nombre" id="nombre" type="text" class="validate" length="16" maxlength="20" onKeyPress="return soloLetras(event)" value="<?php echo utf8_decode($fila['nombre']);  ?>">
                              <label for="nombre">Nombre</label>
                            </div>
                            <div class="input-field col s6">
                            <select class="browser-default " name="tipo">
                              <option value="" disabled selected>Tipo de Jam&oacute;n</option>
                              <option value="Ahumados">Ahumados</option>
                              <option value="Cocidos">Cocidos</option>
                              <option value="Crudos">Crudos</option>
                              <option value="Curados">Curados</option>
                              <option value="Fiambres">Fiambres</option>
                              <option value="Mortapastas">Mortadellas y Pastas</option>
                              <option value="Tradicionales">Tradicionales</option>
                            </select>
                           </div>
                          </div>
                          <div class="row">
                            <div class="file-field input-field">
                              <input class="file-path validate" type="text"/>
                              <div class="btn">
                                <span style="margin-right: 100px;">Imagen</span>  
                                <input type="file" name="foto" />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                              <div class="input-field col s12">
                              <i class="mdi-editor-mode-edit prefix"></i>
                              <textarea name="descripcion" id="descripcion" class="materialize-textarea">
                                <?php echo utf8_decode($fila['descripcion']);  ?>
                            </textarea>
                              <label for="descripcion">Descripcion</label>
                            </div>

                      </div>
                      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </p>

                    <div class="modal-footer">
                       </form>

                       </div>
                  </div>
                  </div>

                  <?php } ?>