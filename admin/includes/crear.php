                    <div class="modal-content">
                      <div class="row">
                         <form class="col s12" name="regi" action="php/nuevo.php" method="post" enctype="multipart/form-data">
                          
                        <div style="float: left;" ><h3>Nuevo Producto</h3> </div>
                      <div style="float: right; margin: 20px;"><button class="btn waves-effect waves-light" type="submit" onClick="pass()" name="php/registro.php">ENVIAR
                       &nbsp; <i class="mdi-content-send"></i>
                      </button></div>
                    </div>                      
                    <p>
                         <div class="row">
                       <div class="row">
                             <div class="input-field col s6">
                              <input name="nombre" id="nombre" type="text" class="validate" length="16" maxlength="20" onKeyPress="return soloLetras(event)">
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
                            <div class="input-field col s6">
                              <input name="peso" id="peso" type="text" class="validate" min="6" length="16" maxlength="20" required="required">
                              <label for="peso">Peso</label>
                            </div>
                            <div class="input-field col s6">
                              <input name="embalaje" id="embalaje" type="text" class="validate" min="6" length="16" maxlength="20" required="required">
                              <label for="embalaje">Embalaje</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s6">
                              <input name="durabilidad" id="durabilidad" type="text" class="validate" min="6" length="16" maxlength="20" required="required">
                              <label for="durabilidad">Durabilidad</label>
                            </div>
                            <div class="input-field col s6">
                              <input name="conservacion" id="conservacion" type="text" class="validate" min="6" length="16" maxlength="20" required="required">
                              <label for="conservacion">Conservaci&oacute;n</label>
                            </div>
                          </div>
                          <div class="row">

                            <div class="input-field col s6">
                              <i class="mdi-editor-mode-edit prefix"></i>
                              <textarea name="descripcion" id="descripcion" class="materialize-textarea"></textarea>
                              <label for="descripcion">Descripcion</label>
                            </div>
                             <div class="input-field col s6">
                              <i class="mdi-editor-mode-edit prefix"></i>
                              <textarea name="ingredientes" id="ingredientes" class="materialize-textarea"></textarea>
                              <label for="ingredientes">Ingredientes</label>
                            </div>

                          </div>

                      </div>
                    </p>
                    </div>
                    <div class="modal-footer" style="height: 100px;">

                       </form>
                       </div>
                  </div>

</table>
</form> 

  
  
  
  