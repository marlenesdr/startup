<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <meta name="description" content="Empresas de innovación digital y desarrollo tecnológico">
  <meta property="og:image" content="http://startup-bolivia.net/msd-innova/img/favicon.png">
  <title>IEBT</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="icon" type="image/gif" href="img/favico.jpg"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection" />

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/multi-select.css">
  <style>
    #feedback1 { font-size: 1.4em; }
    #selectable1 .ui-selecting { background: #FECA40; }
    #selectable1 .ui-selected { background: #F39814; color: white; }
    #selectable1 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #selectable1 li { margin: 3px; padding: 0.4em; font-size: 1em; height: 18px; }
    #feedback2 { font-size: 1.4em; }
    #selectable2 .ui-selecting { background: #FECA40; }
    #selectable2 .ui-selected { background: #F39814; color: white; }
    #selectable2 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #selectable2 li { margin: 3px; padding: 0.4em; font-size: 1em; height: 18px; }
    #feedback3 { font-size: 1.4em; }
    #selectable3 .ui-selecting { background: #FECA40; }
    #selectable3 .ui-selected { background: #F39814; color: white; }
    #selectable3 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #selectable3 li { margin: 3px; padding: 0.4em; font-size: 1em; height: 18px; }
  </style>
</head>
<body>
  <header>
    <div class="navegador1">
      <nav>
        <div class="nav-wrapper"style="background-color:#ffffff; border-bottom: 5px solid #66CCCC;">
          <div class="">
            <a href="#" class="brand-logo"><img src="img/00lmsd001.png" class="resposive-img" width=300 height=55></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons blue-text text-darken-4">menu</i></a>
            <ul class="right hide-on-med-and-down">
            </ul>
            <ul class="side-nav" id="mobile-demo" style="background-color: #66CCCC">
            <li><a class="waves-effect waves-light" style="color:#ffffff;" href="#autenticacion">Autenticación de usuarios</a></li>
            <li><a class="waves-effect waves-light" style="color:#ffffff;" href="#administradores">Alta de administradores</a></li>
            <li><a class="waves-effect waves-light" style="color:#ffffff;" href="#docentes">Alta a docentes</a></li>
            <li><a class="waves-effect waves-light" style="color:#ffffff;" href="#tematicas">Gestión de contenidos</a></li>
            <li><a class="waves-effect waves-light" style="color:#ffffff;" href="#contactos">Contactos</a></li>
          </ul>
        </div>
      </div>
     </nav>
    </div>
    <div class="navegador">
      <nav class="nav-wrapper" style="background-color:#ffffff;border-bottom: 5px solid #66CCCC;">
      <a href="#" class="brand-logo"><img src="img/00lmsd001.png" class="resposive-img" width=300 height=55></a>
          <ul class="right hide-on-med-and-down" id="menu-principal">
            <li class="inicio1"><a class="waves-effect waves-light" style="color:#66CCCC" href="#autenticacion">Autenticacion de usuarios</a></li>
            <li><a class="waves-effect waves-light" style="color:#66CCCC" href="#administradores">Alta a administradores</a></li>
            <li><a class="waves-effect waves-light" style="color:#66CCCC" href="#docentes">Alta a docentes</a></li>
            <li><a class="waves-effect waves-light" style="color:#66CCCC;" href="#tematicas">Gestión de contenidos</a></li>
            <li><a class="waves-effect waves-light" style="color:#66CCCC" href="#contactos">Contactos</a></li>
          </ul>
        </nav>
    </div>
  </header>
  <br>
  <br>
  <br>
  <br>
  <div id="autenticacion" style="padding: 5px 5px 5px 5px; background-color:#4D5969">
        <h6 style="color: white">Autenticación de usuarios</h6>
  </div>
  <br>
   <div class="row">
     <div class="col-lg-5">
     </div>
     <div class='col-lg-6 pull-rigth'id="custom-search-input">
       <div class="input-group">
         <input type="text" class="form-control" placeholder="Buscar" id="q" onkeyup="load(1);"/>
         <span class="input-group-btn">
           <a class="btn btn-info" type="button" onclick="load(1);">
             <i class="material-icons">search</i>
           </a>
          </span>
       <div class='clearfix'></div>
       <div id="loader"></div><!-- Carga de datos ajax aqui -->
       <div id="resultados"></div><!-- Carga de datos ajax aqui -->
       <div class='outer_div'></div><!-- Carga de datos ajax aqui -->
    </div>
   </div>
  </div>
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class='col-lg-10'>
      <p>De los registrados, autentica administradores para la plataforma</p>
      <p>Registrados:</p>
          <select class="center" id='pre-selected-options1' multiple='multiple' style="width:250px">
            <option value='elem_1' selected>elem 1</option>
            <option value='elem_2'>elem 2</option>
            <option value='elem_3'>elem 3</option>
            <option value='elem_4' selected>elem 4</option>
            <option value='elem_5'>elem 5</option>
            <option value='elem_6'>elem 6</option>
            <option value='elem_7'>elem 7</option>
            <option value='elem_8'>elem 8</option>
            <option value='elem_9'>elem 9</option>
            <option value='elem_10'>elem 10</option>
            <option value='elem_11'>elem 11</option>
            <option value='elem_12'>elem 12</option>
            <option value='elem_13'>elem 13</option>
            <option value='elem_14'>elem 14</option>
            <option value='elem_15'>elem 15</option>
          </select>
    </div>
  </div>
  <div class="row">
    <div class="col l2">
    </div>
    <div class='col l4 boton-check center'>
        <br>
          <a href="#" class="guardar boton"><i class="material-icons">save</i> Retroceder</a>
    </div>
    <div class='col l4 boton-check center'>
        <br>
          <a href="#" class="guardar boton"><i class="material-icons">save</i> Guardar</a>
    </div>
    <div class="col l2">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-5">
    </div>
    <div class='col-lg-6 pull-rigth'id="custom-search-input">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar" id="q" onkeyup="load(1);"/>
        <span class="input-group-btn">
          <a class="btn btn-info" type="button" onclick="load(1);">
            <i class="material-icons">search</i>
          </a>
         </span>
      <div class='clearfix'></div>
      <div id="loader"></div><!-- Carga de datos ajax aqui -->
      <div id="resultados"></div><!-- Carga de datos ajax aqui -->
      <div class='outer_div'></div><!-- Carga de datos ajax aqui -->
   </div>
  </div>
 </div>
 <div class="row">
   <div class="col-lg-2">
   </div>
   <div class='col-lg-10'>
     <p>De los registrados, autentica docentes</p>
     <p>Registrados:</p>
         <select class="center" id='pre-selected-options2' multiple='multiple' style="width:250px">
           <option value='elem_1' selected>elem 1</option>
           <option value='elem_2'>elem 2</option>
           <option value='elem_3'>elem 3</option>
           <option value='elem_4' selected>elem 4</option>
           <option value='elem_5'>elem 5</option>
           <option value='elem_6'>elem 6</option>
           <option value='elem_7'>elem 7</option>
           <option value='elem_8'>elem 8</option>
           <option value='elem_9'>elem 9</option>
           <option value='elem_10'>elem 10</option>
           <option value='elem_11'>elem 11</option>
           <option value='elem_12'>elem 12</option>
           <option value='elem_13'>elem 13</option>
           <option value='elem_14'>elem 14</option>
           <option value='elem_15'>elem 15</option>
         </select>
   </div>
 </div>
 <div class="row">
   <div class="col l2">
   </div>
   <div class='col l4 boton-check center'>
       <br>
         <a href="#" class="guardar boton"><i class="material-icons">save</i> Retroceder</a>
   </div>
   <div class='col l4 boton-check center'>
       <br>
         <a href="#" class="guardar boton"><i class="material-icons">save</i> Guardar</a>
   </div>
   <div class="col l2">
   </div>
 </div>
  <br>
  <div class="row">
    <div class="col-lg-5">
    </div>
    <div class='col-lg-6 pull-rigth'id="custom-search-input">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar" id="q" onkeyup="load(1);"/>
        <span class="input-group-btn">
          <a class="btn btn-info" type="button" onclick="load(1);">
            <i class="material-icons">search</i>
          </a>
         </span>
      <div class='clearfix'></div>
      <div id="loader"></div><!-- Carga de datos ajax aqui -->
      <div id="resultados"></div><!-- Carga de datos ajax aqui -->
      <div class='outer_div'></div><!-- Carga de datos ajax aqui -->
   </div>
  </div>
 </div>
 <div class="row">
   <div class="col-lg-2">
   </div>
   <div class='col-lg-10'>
     <p>De los registrados, autentica alumnos</p>
     <p>Registrados:</p>
         <select class="center" id='pre-selected-options3' multiple='multiple' style="width:250px">
           <option value='elem_1' selected>elem 1</option>
           <option value='elem_2'>elem 2</option>
           <option value='elem_3'>elem 3</option>
           <option value='elem_4' selected>elem 4</option>
           <option value='elem_5'>elem 5</option>
           <option value='elem_6'>elem 6</option>
           <option value='elem_7'>elem 7</option>
           <option value='elem_8'>elem 8</option>
           <option value='elem_9'>elem 9</option>
           <option value='elem_10'>elem 10</option>
           <option value='elem_11'>elem 11</option>
           <option value='elem_12'>elem 12</option>
           <option value='elem_13'>elem 13</option>
           <option value='elem_14'>elem 14</option>
           <option value='elem_15'>elem 15</option>
         </select>
   </div>
  </div>
  <div class="row">
   <div class="col l2">
   </div>
   <div class='col l4 boton-check center'>
       <br>
         <a href="#" class="guardar boton"><i class="material-icons">save</i> Retroceder</a>
   </div>
   <div class='col l4 boton-check center'>
       <br>
         <a href="#" class="guardar boton"><i class="material-icons">save</i> Guardar</a>
   </div>
   <div class="col l2">
   </div>
  </div>
  <div id="administradores" style="padding: 5px 5px 5px 5px; background-color:#4D5969">
        <h6 style="color: white">Alta a administradores</h6>
  </div>
      <div class="" style="margin: 10px 10px 10px 10px">
        <div id="" class=" row inscribir titulos">
          <form action="">
            <div class="col l12">
              <label for="">Administrador</label>
              <select name="programa" class="browser-default" style="background-color:#fff; border-color:#ccc">
                  <option>-- Seleccionar --</option>
                  <option>Xavier Ríos</option>
                  <option>Hugo Menacho</option>
                  <option>Juan Pérez</option>
              </select>
              <br>
            </div>
            <div class="col l12">
               <table class="highlight responsive-table" cellspacing="1" width="500">
                  <tr>
                    <thead>
                      <th width="4%">N°</th>
                      <th width="46%">Tarea</th>
                      <th width="10%">Crear registros</th>
                      <th width="10%">Leer registros</th>
                      <th width="10%">Actualizar registros</th>
                      <th width="10%">Borrar registros</th>
                      <th width="10%">Imprimir</th>
                    </thead>
                  </tr>
                <tbody id="tabla_permisos">
                  <tr onclick="$('#img1').attr('src','imagenes/personal/001.jpg');">
                    <td data-label="N°">1.</td>
                    <td data-label="tarea">Administrar</td>
                    <td data-label="crear">Si</td>
                    <td data-label="leer">Si</td>
                    <td data-label="actualizar">Si</td>
                    <td data-label="borrar">Si</td>
                    <td data-label="imprimir">Si</td>
                  </tr>
                  <tr onclick="$('#img1').attr('src','imagenes/personal/002.jpg');">
                    <td data-label="N°">2.</td>
                    <td data-label="tarea">Programador</td>
                    <td data-label="crear">Si</td>
                    <td data-label="leer">Si</td>
                    <td data-label="actualizar">Si</td>
                    <td data-label="borrar">No</td>
                    <td data-label="imprimir">No</td>
                  </tr>
                </tbody>
              </table>
    <!--          <label for="">Selección de tareas</label>
                  <ol id="selectable1" class="titulos">
                    <li class="ui-widget-content">Item 1</li>
                    <li class="ui-widget-content">Item 2</li>
                    <li class="ui-widget-content">Item 3</li>
                    <li class="ui-widget-content">Item 4</li>
                    <li class="ui-widget-content">Item 5</li>
                    <li class="ui-widget-content">Item 6</li>
                    <li class="ui-widget-content">Item 7</li>
                  </ol>
                  <br>  -->
          </div>
          <br>
          <div class="row">
            <div class="col l6 boton-check">
              <br>
              <a href="#" class="guardar boton"><i class="material-icons">save</i> Retroceder</a>
            </div>
            <div class="col l6 boton-check">
              <br>
              <a href="#" class="guardar boton"><i class="material-icons">save</i> Guardar</a>
            </div>

          </div>
          </form>
        </div>
      </div>

      <div id="docentes" style="padding: 5px 5px 5px 5px; background-color:#4D5969">
            <h6 style="color: white">Alta a docentes</h6>
      </div>
      <div class="" style="margin: 10px 10px 10px 10px">
        <div id="" class=" row inscribir titulos">
          <form action="">
            <div class="col l12">
              <label for="">Administrador</label>
              <select name="programa" class="browser-default" style="background-color:#fff; border-color:#ccc">
                  <option>-- Seleccionar --</option>
                  <option>Xavier Ríos</option>
                  <option>Hugo Menacho</option>
                  <option>Juan Pérez</option>
              </select>
              <br>
            </div>
            <div class="col l12">
               <table class="highlight responsive-table" cellspacing="1" width="500">
                  <tr>
                    <thead>
                      <th width="4%">N°</th>
                      <th width="46%">Tarea</th>
                      <th width="10%">Crear registros</th>
                      <th width="10%">Leer registros</th>
                      <th width="10%">Actualizar registros</th>
                      <th width="10%">Borrar registros</th>
                      <th width="10%">Imprimir</th>
                    </thead>
                  </tr>
                <tbody id="tabla_permisos">
                  <tr onclick="$('#img1').attr('src','imagenes/personal/001.jpg');">
                    <td data-label="N°">1.</td>
                    <td data-label="tarea">Administrar</td>
                    <td data-label="crear">Si</td>
                    <td data-label="leer">Si</td>
                    <td data-label="actualizar">Si</td>
                    <td data-label="borrar">Si</td>
                    <td data-label="imprimir">Si</td>
                  </tr>
                  <tr onclick="$('#img1').attr('src','imagenes/personal/002.jpg');">
                    <td data-label="N°">2.</td>
                    <td data-label="tarea">Programador</td>
                    <td data-label="crear">Si</td>
                    <td data-label="leer">Si</td>
                    <td data-label="actualizar">Si</td>
                    <td data-label="borrar">No</td>
                    <td data-label="imprimir">No</td>
                  </tr>
                </tbody>
              </table>
    <!--          <label for="">Selección de tareas</label>
                  <ol id="selectable1" class="titulos">
                    <li class="ui-widget-content">Item 1</li>
                    <li class="ui-widget-content">Item 2</li>
                    <li class="ui-widget-content">Item 3</li>
                    <li class="ui-widget-content">Item 4</li>
                    <li class="ui-widget-content">Item 5</li>
                    <li class="ui-widget-content">Item 6</li>
                    <li class="ui-widget-content">Item 7</li>
                  </ol>
                  <br>  -->
          </div>
          <br>
          <div class="row">
            <div class="col l6 boton-check">
              <br>
              <a href="#" class="guardar boton"><i class="material-icons">save</i> Retroceder</a>
            </div>
            <div class="col l6 boton-check">
              <br>
              <a href="#" class="guardar boton"><i class="material-icons">save</i> Guardar</a>
            </div>

          </div>
          </form>
        </div>
      </div>
      <br>
      <div id="docentes" style="padding: 5px 5px 5px 5px; background-color:#4D5969">
            <h6 style="color: white">Alta a alumnos</h6>
      </div>
      <div class="" style="margin: 10px 10px 10px 10px">
        <div id="" class=" row inscribir titulos">
          <form action="">
            <div class="col l12">
              <label for="">Administrador</label>
              <select name="programa" class="browser-default" style="background-color:#fff; border-color:#ccc">
                  <option>-- Seleccionar --</option>
                  <option>Xavier Ríos</option>
                  <option>Hugo Menacho</option>
                  <option>Juan Pérez</option>
              </select>
              <br>
            </div>
            <div class="col l12">
               <table class="highlight responsive-table" cellspacing="1" width="500">
                  <tr>
                    <thead>
                      <th width="4%">N°</th>
                      <th width="46%">Tarea</th>
                      <th width="10%">Crear registros</th>
                      <th width="10%">Leer registros</th>
                      <th width="10%">Actualizar registros</th>
                      <th width="10%">Borrar registros</th>
                      <th width="10%">Imprimir</th>
                    </thead>
                  </tr>
                <tbody id="tabla_permisos">
                  <tr onclick="$('#img1').attr('src','imagenes/personal/001.jpg');">
                    <td data-label="N°">1.</td>
                    <td data-label="tarea">Administrar</td>
                    <td data-label="crear">Si</td>
                    <td data-label="leer">Si</td>
                    <td data-label="actualizar">Si</td>
                    <td data-label="borrar">Si</td>
                    <td data-label="imprimir">Si</td>
                  </tr>
                  <tr onclick="$('#img1').attr('src','imagenes/personal/002.jpg');">
                    <td data-label="N°">2.</td>
                    <td data-label="tarea">Programador</td>
                    <td data-label="crear">Si</td>
                    <td data-label="leer">Si</td>
                    <td data-label="actualizar">Si</td>
                    <td data-label="borrar">No</td>
                    <td data-label="imprimir">No</td>
                  </tr>
                </tbody>
              </table>
    <!--          <label for="">Selección de tareas</label>
                  <ol id="selectable1" class="titulos">
                    <li class="ui-widget-content">Item 1</li>
                    <li class="ui-widget-content">Item 2</li>
                    <li class="ui-widget-content">Item 3</li>
                    <li class="ui-widget-content">Item 4</li>
                    <li class="ui-widget-content">Item 5</li>
                    <li class="ui-widget-content">Item 6</li>
                    <li class="ui-widget-content">Item 7</li>
                  </ol>
                  <br>  -->
          </div>
          <br>
          <div class="row">
            <div class="col l6 boton-check">
              <br>
              <a href="#" class="guardar boton"><i class="material-icons">save</i> Retroceder</a>
            </div>
            <div class="col l6 boton-check">
              <br>
              <a href="#" class="guardar boton"><i class="material-icons">save</i> Guardar</a>
            </div>

          </div>
          </form>
        </div>
      </div>

      <br>
      <div id="tematicas" style="padding: 5px 5px 5px 5px; background-color:#4D5969">
        <div class="col l12 m6 s12">
            <h6 style="color: white">Gestión de contenidos</h6>
        </div>
      </div>
      <div class="row" style="margin: 10px 10px 10px 10px">
        <div class="col s10 m6 l4">
          <a class="waves-effect waves-light btn light-blue lighten-1" href="updateprod/actualizanoticias.php">Gestión de temáticas</a>
        </div>
        <div class="col s10 m6 l4">
          <a class="waves-effect waves-light btn light-blue lighten-1" href="updateprod/actualizanoticias.php">Gestión de cursos</a>
        </div>
        <div class="col s10 m6 l4">
          <a class="waves-effect waves-light btn light-blue lighten-1" href="updateprod/actualizanoticias.php">Gestión de contenidos</a>
        </div>
      </div>
  <br>
  <footer id="contactos">
      <div class="flex2">
        <div id="piepagina" style=" font: oblique bold 90% cursive">
          <h5 id="pie1" style="">Contactos </h5>
          <p>
          info@sucrejoven.com <br>
          Calle: Lima Pampa #7 <br>
          Teléfono: (+591) 46433070 </p>
          <h5 id="pie1" style=" font: oblique bold 90% cursive">Derechos reservados</h5>
          <p> <a href="http://startup-bolivia.net/msd-innova/" target="_blank">@MSDInnova - 2019</a></p>
        </div>
        <div id="piepagina" style=" font: oblique bold 90% cursive">
        </div>
        <div id="piepagina" style=" font: oblique bold 90% cursive">
          <p>Ubicación de la institución: </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4503941045714!2d-65.25656178592422!3d-19.043925216282016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93fbcf37de9265cb%3A0xfc2fd579b7cdf89!2sGAMS%20-%20Direcci%C3%B3n%20Municipal%20de%20la%20Juventud!5e0!3m2!1ses-419!2sbo!4v1567949588936!5m2!1ses-419!2sbo" width="200" height="120" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <br>
        </div>
      </div>

    </footer>
 <script src="js/vendor/jquery.js"></script>
 <script src="js/vendor/what-input.js"></script>
 <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script type="text/javascript" scr="js/materialize.js"></script>
 <script type="text/javascript" scr="js/materialize.min.js"></script>
 <script type="text/javascript" scr="js/modal.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
 <script src="js/jquery.multi-select.js"></script>
 <script type="text/javascript">
 // run pre selected options
  $('#pre-selected-options1').multiSelect();
 </script>
 <script type="text/javascript">
 // run pre selected options
  $('#pre-selected-options2').multiSelect();
 </script>
 <script type="text/javascript">
 // run pre selected options
  $('#pre-selected-options3').multiSelect();
 </script>


 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script type="text/javascript">
    $( function() {
      $( "#selectable1" ).selectable();
      } );
 </script>
 <script type="text/javascript">
    $( function() {
      $( "#selectable2" ).selectable();
      } );
 </script>
 <script type="text/javascript">
    $( function() {
      $( "#selectable3" ).selectable();
      } );
 </script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
 <script>$(".button-collapse").sideNav();</script>

 </body>
</html>
