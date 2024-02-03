                   
               <?php

               include "../php/conexion.php";

               $id=$_GET['id'];

               $query="SELECT * FROM autenticar WHERE id='$id'";

               $res=$db->query($query);

               while ($fila=$res->fetch_array()) { 

               ?>   
                    <div class="modal-content">
                      <h3>Editar perfil</h3>
                    <p>
                         <div class="row">
                        <form class="col s12" name="regi" action="php/editar.php?id=<?php echo $_GET['id']; ?>" method="post">
                          <div class="row">
                             <div class="input-field col s6">
                              <input name="nombre" id="nombre" type="text" class="validate" length="16" maxlength="20" onKeyPress="return soloLetras(event)" value="<?php echo $fila['nombre']; ?>">
                              <label for="nombre"> Nombres </label>
                            </div>
                            <div class="input-field col s6">
                              <input name="apellido" id="apellido" type="text" class="validate" length="16" maxlength="20" onKeyPress="return soloLetras(event)" value="<?php echo $fila['apel']; ?>">
                              <label for="apellido"> Apellidos</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s6">
                              <input name="usuario" id="usuario" type="text" class="validate" length="16" maxlength="20" required="required" onKeyPress="return sololenum(event)" value="<?php echo $fila['usuario']; ?>">
                              <label for="usuario"> Usuario</label>
                            </div>
                            <div class="input-field col s6">
                              <p>
                                <?php 

                                  if ($fila['tipo']=="admin") 
                                    
                                  ?>
                                <input class="with-gap" name="tipo" type="radio" id="test1" value="admin" <?php if ($fila['tipo']=="admin") { echo "checked"; }?> />
                                <label for="test1">Administrador</label>
                                &nbsp;&nbsp;&nbsp;
                                <input class="with-gap" name="tipo" type="radio" id="test2" value="Cliente" <?php  if ($fila['tipo']=="cliente") { echo "checked"; } ?> />
                                <label for="test2">Cliente</label>
                              </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s6">
                              <input name="password" id="password" type="password" class="validate" min="6" length="16" maxlength="20" required="required">
                              <label for="password">Password</label>
                            </div>
                            <div class="input-field col s6">
                              <input name="repipass" id="repi" type="password" class="validate" min="6" length="16" maxlength="20" required="required">
                              <label for="repi"><?php  echo utf8_decode("Verifique su contraseña"); ?></label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input name="email" id="email" type="email" class="validate" maxlength="40" value="<?php echo $fila['email']; ?>">
                              <label for="email">Email:</label>
                            </div>
                          </div>

                      </div>
                    </p>
                    </div>
                    <div class="modal-footer">
                      <button class="btn waves-effect waves-light" type="submit" onClick="pass()" name="php/registro.php">ENVIAR
                       &nbsp; <i class="mdi-content-send"></i>
                      </button>
                       </form>
                       </div>
                  </div>
                  <?php } ?>