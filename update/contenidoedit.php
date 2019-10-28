<?php

$idcontenido= $_GET["id"];

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="juventudes";
$db_table_name="juv_contenido";
//   $db_connection = mysql_connect($db_host, $db_user, $db_password);
   $db_connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);
		
if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$resultado=mysqli_query($db_connection,"SELECT * FROM ".$db_table_name." WHERE idcontenido = ".$idcontenido);
$row = mysqli_fetch_array($resultado);

  $titulo=$row['titulo'];
//  $texto=substr(strip_tags(htmlspecialchars_decode($row['texto'])),0,200);
  $texto=htmlspecialchars_decode($row['texto']);
  $estado=$row['estado'];
  $creado_por=$row['creado_por'];
  $fecha_publicacion=$row['fecha_publicacion'];
  $fecha_despublicacion=$row['fecha_despublicacion'];
  $categoria=$row['categoria'];
  $path_foto=$row['path_foto'];		
	
?>
<!DOCTYPE html>
<head>
		<title>Contenido</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css">
    <link rel="stylesheet" href="https://openlayers.org/en/v5.3.0/css/ol.css" type="text/css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
  <!--esto es para el mapa-->
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
	  <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
	  <style type="text/css">
	 	 #map{
	 		width: 50%;
             height: 50%;
	 		padding: 0;
	 		margin: 0;
	 	      }
    </style>
    <script>
       markersLayer.on("click", function (event) {
       var clickedMarker = event.layer;
        });
    </script>
<!-- hasta aqui es para el mapa -->

<!-- esto pone el tinymce copiado del moodle 
<script type="text/javascript" src="js/editor/tinymce/tiny_mce/3.5.11/tiny_mce_src.js"></script>
<script type="text/javascript" src="js/editor/tinymce/tiny_mce/3.5.11/tiny_mce_popup.js"></script>
<script type="text/javascript" src="js/editor/tinymce/tiny_mce/3.5.11/tiny_mce.js"></script>
-->
<!-- esto pone el tinymce descargado-->
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>

<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: "image media searchreplace imagetools spellchecker",
    
    // images_upload_url: 'upload.php',
    images_upload_url: 'postAcceptor.php',
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
      
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'postAcceptor.php');
      
        xhr.onload = function() {
            var json;
        
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
        
            json = JSON.parse(xhr.responseText);
        
            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
        
            success(json.location);
        };
      
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
      
        xhr.send(formData);
    },

 });
</script>
<script type="text/javascript" src="js/OpenLayers_marcadores.js"></script>
  
</head>
<body>
  <div id="contenido">
    <div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Artículo</h2>
<form action="actualizacontenido.php" method="POST" autocomplete="off" enctype="multipart/form-data" >
      <input id="idcontenido" type="hidden" name="idcontenido" value="<?php echo $idcontenido;?>" class="form-input">
      <input id="imagenanterior" type="hidden" name="imagenanterior" value="<?php echo $path_foto;?>" class="form-input">
     
      <label for="titulo">Título<span><em>*</em></span></label>
      <br>
      <input id="titulo" type="text" name="titulo" value="<?php echo $titulo; ?>" class="form-input" required maxlength="100" size="40" placeholder="" required/>
      <br>
      <label for="estado">Estado<span><em>*</em></span></label>
      <br>
        <?php if($estado=="Publicado"): ?>
          <input type="radio" name="estado" value="Publicado" checked  > Publicado<br>
          <input type="radio" name="estado" value="Despublicado"> Despublicado<br>
        <?php  else: ?>
          <input type="radio" name="estado" value="Publicado" > Publicado<br>
          <input type="radio" name="estado" value="Despublicado" checked> Despublicado<br>
        <?php endif;?>
      <br>
      <label for="fecha_publicacion">Fecha de publicación <span><em>*</em></span></label>
      <br>
      <input type="date" name="fecha_publicacion" value="<?php echo $fecha_publicacion; ?>"class="form-input" value="<?php echo date("Y-m-d");?>" required maxlength="100" size="40"  required/>
      <br>
      <label for="fecha_despublicacion">Fecha de despublicación <span></span></label>
      <br>
      <input type="date" name="fecha_despublicacion" value="<?php echo $fecha_despublicacion; ?>" class="form-input" required maxlength="100" size="40" placeholder="dd/mm/aa" required/>
      <br>
      <label for="texto">Contenido<span><em>*</em></span></label>
      <br>
      <textarea id="texto" name="texto"  ><?php echo $texto ?></textarea>
      <label class="uploader" ondragover="return false" >Fotografía 
            <i class="icon-upload icon" ></i>
            <img src="" class="" >
            <img class="img-fluid mx-auto d-block" src="http://localhost/formularioMD1/fotos_noticias/<?php echo $path_foto; ?>" width="200" height="200" />
            <br>
            <input type="file" accept="image/*" name="path_foto"  id="path_foto" style="  -webkit-align-items: center;
            align-items: center;background-color: #eee; display: -webkit-flex;display: flex;-webkit-justify-content: center;
            justify-content: center;">
        </label>
        <script src="FileUploader.js"></script>
        <script type="text/javascript">
           new FileUploader('.uploader');
        </script> 
        <br>
</div>
<br>
 <input class="form-btn" name="submit" type="submit" value="Guardar" />
</div>
</form>


</div><!-- /.contenedor -->

</body>

<!--<script src="formularios/bootstrap/js/bootstrap.min.js"></script>  -->
  
</html>