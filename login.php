 <?php

  session_start();
  include "php/conexion.php";
  if (isset($_SESSION['user'])) {
?>
    Hola <?php echo $_SESSION['user']; ?> Ya has iniciado session <a href="php/logout.php">Cerrar session</a>
    <?php

  }else{
    ?>
   <!DOCTYPE html>
<html>

<head>
  <title>BRAVO.S.A</title>
           <!--  CSS-->
    <link href="bin/bravo.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link rel="icon" href="banner/mapa.png" sizes="32x32">
     <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bin/bravo.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
     <script type="text/javascript" src="js/init.js"></script>
      <script type="text/javascript" src="js/fecha.js"></script>
      <script type="text/javascript" src="js/forms.js"></script>
      <script src="busca.js" type="text/javascript"></script>
     <script type="text/javascript">

      var options = [

        {selector: '#staggered-test', offset: 400, callback: 'Materialize.showStaggeredList("#staggered-test")' }

      ];
      Materialize.scrollFire(options);

      function valida(){

          var usuario = document.identi.user.value;

        if(usuario=="" || usuario==null){return false;}
        if(!isNaN(usuario)){ alert("El usuario no puede ser un numero"); return false;}

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


     </script>

    <!--  Scripts-->
<!--
    <script src="validar.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="js/jquery.timeago.min.js"></script>
    <script src="js/prism.js"></script>
   -->
</head>
<body onload="fech()">
 <header>

     <nav>
      <?php include "includes/submenu.php"; ?>
    <div class="nav-wrapper">

      <a href="#!" class="brand-logo"><img src="banner/mapa1.png" width="150" height="63" alt=""></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">&nbsp;Empresa&nbsp;<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
    <li><a class="dropdown-button" href="#!" data-activates="dropdown2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
    <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Marketing<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        <li><a href="index.php?pag=contacto">Contacto</a></li>
        <li><form>
            <div class="input-field">
              <input type="search" onkeyup="showResult(this.value)">
              <label for="search"><i class="mdi-action-search"></i></label>
              <i class="mdi-navigation-close"></i>
            </div>
            <div id="livesearch" class="buscador"></div>
            </form>
        </li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li class="divider"></li>
        <li href="#!" class=""><img src="banner/logo.png" width="200" height="100" style="margin-top:5px;" alt=""></li>
         <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
           <li class="bold"><a class="collapsible-header  waves-effect waves-red">Empresa</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="index.php">Empresa</a></li>
                  <li><a href="index.php?pag=politica">Politica</a></li>
                  <li><a href="index.php?pag=evolucion">Evolucion</a></li>
                  <li><a href="index.php?pag=certifica">Certificaciones</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-red">Productos</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="index.php?pag=crudos">Crudos congelados</a></li>
                  <li><a href="index.php?pag=curados">Curados</a></li>
                  <li><a href="index.php?pag=ahumados">Ahumados</a></li>
                  <li><a href="index.php?pag=cocidos">Jamones cocidos</a></li>
                  <li><a href="index.php?pag=fiambre">Fiambres</a></li>
                  <li><a href="index.php?pag=contruc">Especialidades(Ave)</a></li>
                  <li><a href="index.php?pag=contruc">Mortadella y Pastas</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-red">Marketing</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="index.php?pag=ferias">Ferias</a></li>
                  <li><a href="index.php?pag=recetas">Recetas</a></li>
                </ul>
              </div>
            </li>
            <li class="bold" style="padding-left: 13px;"><a href="index.php?pag=admin">Administracion</a></li>
            <li class="bold" style="padding-left: 13px;"><a href="index.php?pag=boletin">Boletin</a></li>
            <li class="bold" style="padding-left: 13px;"><a href="index.php?pag=mapa">Mapa</a></li>
            <li class="bold" style="padding-left: 13px;"><a href="index.php?pag=productores">Productores</a></li>
          </ul>
        <li><form>
            <div class="input-field">
              <input id="search" type="search" required>
              <div id="livesearch"></div>
              <label for="search"><i class="mdi-action-search"></i></label>
              <i class="mdi-navigation-close"></i>
            </div>
            </form>
        </li>
        </ul>
    </div>
  </nav>
   <a name="sube"></a>
  <div class="progress">
      <div class="indeterminate"></div>
  </div>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="banner/1.jpg"  alt="" > <!-- random image -->
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="banner/2.jpg"  alt=""> <!-- random image -->
        <div class="caption left-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="banner/3.jpg"  alt=""> <!-- random image -->
        <div class="caption right-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="banner/4.jpg"  alt=""> <!-- random image -->
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
    </ul>
  </div>
          
 </header>
 <main>

    <div class="row">

      <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
      <h3 class="header">Identificarse</h3>
                    <div class="row">
            <form class="col s12" method="post" action="php/logeo.php" name="identi">
              <div class="row">
                <div class="input-field col s12">
                  <input name="user" id="last_name" type="text" class="validate" maxlength="20" required="required" onKeyPress="return lenum(event)" >
                  <label for="last_name">Usuario</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input name="pass" id="ipassword" type="password" class="validate" maxlength="20" required="required">
                  <label for="ipassword">Contrase&ntilde;a</label>
                </div>
              </div>
            <p>
              <?php 

              if (isset($_GET['error'])) {
                 $error = $_GET['error'];

              if ( $error == 1 ) {
                ?>
                <div class="card-panel">
                <span class="red-text text-darken-2">    
                <i class="small mdi-alert-error"></i> 
              <h7>Usuario o contrase&ntilde;a Incorrecto</h7>
              </span>              
              </div>
                <?php
              }
              elseif ( $error == 2 ) {
               ?>
               <div class="card-panel">
                <span class="orange-text text-darken-2">    
                <i class="small mdi-alert-warning "></i>
              <h7>Debes Iniciar Seccion para poder utilizar el Sitio Web </h7>
              </span>              
              </div>
              <?php    
              }
              }
              else{

                echo " ";

              }

             

              ?>
                      <input type="checkbox" id="test6"/>
                      <label for="test6">Recordar usuario</label>
                    </p>
                <button class="btn waves-effect waves-light" type="submit" name="enviar" style="width: 170px; font-size: 20px;" onClick="valida()">Entrar
                <i class="mdi-action-done"></i>
                  </button>
            </form>
          </div>
           <div id="">Si no esta registrado. Por favor. &nbsp;<a class="modal-trigger waves-effect waves-light" href="#modal1"  style="font-size: 20px;"> Registrarse!</a></strong></div></a>
      <br>
       <a class="btn waves-effect waves-light" style="background-color: #ff3d00; font-size: 25px; cursor: default;"><span id="fech"></span> </a>

                        <?php
                include "includes/estrucregi.php";
        ?>
            </br>
          </br>

                    <h3 class="header">Vinculos</h3>
        <div class="collection">
        <?php 
        
        $query="SELECT * FROM vinculos";

        $res= $db->query($query);

         while($fila=mysqli_fetch_array($res)){

            $nomb="$fila[nombre]";
            $direc="$fila[direccion]";

        ?>  
        <a href="<?php echo $direc; ?>" class="collection-item" style="color:#FF0000"><?php echo $nomb; ?></a>
          <?php } ?>
      </div>


      </div>

       <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        <blockquote>


            <?php
      if (isset($_GET["pag"]))
            {
            $url = $_GET["pag"];
      include "includes/".$url.".php";
            }
      else
            {
      include "includes/empresa.php";
            }
      ?>

        </blockquote>

      </div>


    </div>

</main>

<footer class="page-footer">
          <?php include "includes/pie.php"; ?>
</footer>


</body>
</html>
  <?php
  }

?>
