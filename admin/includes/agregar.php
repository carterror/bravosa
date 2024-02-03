                     <script type="text/javascript">
          function pass(){
          var user = document.regi.usuario.value;
          var pass = document.regi.password.value;
          var passrepi = document.regi.repipass.value;
          var testuser = /^[0-9]+[a-z]+$/;

        if(user=="" || user==null){return false;}
        if(!isNaN(user)){ alert("El usuario no puede ser un numero"); return false;}
        if(pass!=passrepi){
          
          alert ("<?php  echo utf8_decode("Las contraseña no coinsiden"); ?>");
          return false;
          }
        }
        function sololenum(e) {
                  key = e.keyCode || e.which;
                  tecla = String.fromCharCode(key).toLowerCase();
                  letras = "áéíóúabcdefghijklmnñopqrstuvwxyz1234567890";
                  especiales = [8];

                  tecla_especial = false
                  for(var i in especiales) {
                      if(key == especiales[i]) {
                          tecla_especial = true;
                          break;
                      }
                  }

                  if(letras.indexOf(tecla) == -1 && !tecla_especial)
                      return false;
              }
        function soloLetras(e) {
                  key = e.keyCode || e.which;
                  tecla = String.fromCharCode(key).toLowerCase();
                  letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";
                  especiales = [8];

                  tecla_especial = false
                  for(var i in especiales) {
                      if(key == especiales[i]) {
                          tecla_especial = true;
                          break;
                      }
                  }

                  if(letras.indexOf(tecla) == -1 && !tecla_especial)
                      return false;
              }
            </script>
                    <div class="modal-content">
                      <h3>Registro</h3>
                    <p>
                         <div class="row">
                        <form class="col s12" name="regi" action="php/registro.php" method="post">
                          <div class="row">
                             <div class="input-field col s6">
                              <input name="nombre" id="nombre" type="text" class="validate" length="16" maxlength="20" onKeyPress="return soloLetras(event)">
                              <label for="nombre">Nombre</label>
                            </div>
                            <div class="input-field col s6">
                              <input name="apellido" id="apellido" type="text" class="validate" length="16" maxlength="20" onKeyPress="return soloLetras(event)">
                              <label for="apellido">Apellidos</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s6">
                              <input name="usuario" id="usuario" type="text" class="validate" length="16" maxlength="20" required="required" onKeyPress="return sololenum(event)">
                              <label for="usuario">Usuario</label>
                            </div>
                            <div class="input-field col s6">
                              <p>
                                <input class="with-gap" name="tipo" type="radio" id="test1" value="admin" />
                                <label for="test1">Administrador</label>
                                &nbsp;&nbsp;&nbsp;
                                <input class="with-gap" name="tipo" type="radio" id="test2" value="cliente" checked />
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
                              <input name="email" id="email" type="email" class="validate" maxlength="40">
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