        function pass(){
		  var user = document.regi.usuario.value;
          var pass = document.regi.password.value;
		  var passrepi = document.regi.repipass.value;
          var usuario = document.regi.user.value;

		  var testuser = /^[0-9]+[a-z]+$/;

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
                  especiales = [];

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

       function lenum(e) {
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