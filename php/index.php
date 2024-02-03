<!DOCTYPE html>
<html>

<head>
  <title>BRAVO.S.A</title>

<body >
           <!-- Modal Structure -->
                  <div id="modal1" class="modal modal-fixed-footer">
                    <div class="modal-content">
                      <h4>Registro</h4>
                    <p>
                         <div class="row">
                        <form class="col s12" action="registro.php" method="post">
                          <div class="row">
                             <div class="input-field col s6">
                              <input name="nombre" id="nombre" type="text" class="validate" length="16" maxlength="20">
                              <label for="nombre">Nombre</label>
                            </div>
                            <div class="input-field col s6">
                              <input name="apellido" id="apellido" type="text" class="validate" length="16" maxlength="20">
                              <label for="apellido">Apellidos</label>
                            </div>
                          </div>
                           <div class="row">
                            <div class="input-field col s12">
                                <select name="tipo" >
                                  <option value="" disabled selected>Tipo de Usuario</option>
                                  <option value="1">Trabajador</option>
                                  <option value="2">Cliente</option>
                                </select>
                                </div>
                              </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input name="usuario" id="usuario" type="text" class="validate" length="16" maxlength="20" required="required">
                              <label for="usuario">Usuario</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input name="password" id="password" type="password" class="validate" min="6" length="16" maxlength="20" required="required">
                              <label for="password">Password</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input name="email" id="email" type="email" class="validate" maxlength="25">
                              <label for="email">Email</label>
                            </div>
                          </div>

                      </div>
                    </p>
                    </div>
                    <div class="modal-footer">
                      <button class="btn waves-effect waves-light" type="submit" name="php/registro.php">ENVIAR
                       &nbsp; <i class="mdi-content-send"></i>
                      </button>
                       </form>
                       </div>
                  </div>
                  
                  </body>
</html>