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
<form action="registracontenido.php" method="POST" autocomplete="off" enctype="multipart/form-data" >
<label for="titulo">Título<span><em>*</em></span></label>
      <br>
      <input id="titulo" type="text" name="titulo" class="form-input" required maxlength="100" size="40" placeholder="" required/>
      <br>
      <label for="estado">Estado<span><em>*</em></span></label>
      <br>
        <input type="radio" name="estado" value="Publicado" > Publicado<br>
        <input type="radio" name="estado" value="Despublicado"> Despublicado<br>
      <br>
      <label for="fecha_publicacion">Fecha de publicación <span><em>*</em></span></label>
      <br>
      <input type="date" name="fecha_publicacion" class="form-input" value="<?php echo date("Y-m-d");?>" required maxlength="100" size="40"  required/>
      <br>
      <label for="fecha_despublicacion">Fecha de despublicación </label>
      <br>
      <input type="date" name="fecha_despublicacion" class="form-input" maxlength="100" size="40" placeholder="dd/mm/aa" />
      <br>
      <label for="texto">Contenido<span><em>*</em></span></label>
      <br>
      <textarea id="texto" name="texto"></textarea>
      <label class="uploader" ondragover="return false" >Fotografía 
            <i class="icon-upload icon" ></i>
            <img src="" class="">
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