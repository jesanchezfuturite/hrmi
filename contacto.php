<?php
require_once "includes/recaptchalib.php"; 
?>

<!DOCTYPE html>
<html class="no-js" lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Patronato del Hospital Regional de Alta Especialidad Materno Infantil de Nuevo León" />
    <meta name="resource-type" content="document" /> 
    <meta name="distribution" content="global" /> 
    <meta name="Robots" content="Index,Follow" />
    <meta name="author" content="http://www.Influx.com.mx" />
    <meta name="rating" content="General" />
    <meta name="doc-rights" content="Copywritten work" />

    <title>Patronato Hospital Materno Infantil</title>
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
     
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/sections.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="font/flaticon.css"/>

    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(function(){
        $(document).foundation();
      });

      function send()
      {			
        $.post("process/contacto.php", $("#Contacto2").serialize(), function(data) {
        	var objData = $.parseJSON(data);
        	if(objData.status =='success'){
        		window.location ='contacto-ok.php';
        	}else{
        		$("#notificaciones").html('<div class="warning-box" style="width:230px">'+ objData.message +'</div>');
        		
           }		
        });
      }
     
    </script>
	<script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>
  </head>
  <body>

<?php require("header.php"); ?>
    
    <div class="clearfix"></div>

    <section class="contacto">
     
    </section>
     
 <div class="clearfix"></div>

     <section>
      <div class="row top40">
        <div class="large-6 medium-6 small-12 columns">
          <h2>Envíanos un mensaje</h2>
            <form name="Contacto2" id="Contacto2" method="post" action="">
              <div class="large-12 columns">
                <div class="row">
                  <input name="nombre" type="text" id="nombre" placeholder="Nombre"/>
                </div>
              </div>
              <div class="row">
                <div class="large-6 columns">
                  <input name="email" type="text" id="email" placeholder="E-mail"/>
                </div>
                 <div class="large-6 columns">
                  <input name="tel" type="tel" id="tel" placeholder="Teléfono"/>
                </div>
              </div>
              <div class="row">
                <div class="large-12 columns">
                  <textarea name="mensaje" id="mensaje"  placeholder="Comentarios"></textarea>
                </div>
              </div>
              <div class="clear top20"></div>
              <div class="small-12 large-12 medium-12 columns">
                <label id="notifications"></label>
              </div>
              <div class="large-7 medium-6 small-12 columns">
                <div class="g-recaptcha" data-sitekey="6LcFNysUAAAAANqJzZJERMBO_tckbZjJZUTz_i7B"></div> <!-- captcha de google -->
              </div>
              <label id="notificaciones"></label>
              <div class="left large-5 medium-6 small-12 columns">
                <label id="lbl_guardar" style="visibility:hidden;">
                  <img id="img_save_sub" src="img/cargando_2.gif"/>
                  &nbsp; Enviando...                                
                </label>
              </div>
              <div class="clear"></div>
              <div class="large-7 columns top20">
                <input type="button" class="button success radius" name="imageField" id="btn_guardar2" style="cursor:pointer" onclick="send()" value="Enviar">
              </div>
            </form>
          </div>
          <div class="large-5 medium-6 small-12 columns">
            <h2>Contáctanos </h2>
            <p><i class="flaticon-placeholder"></i>Avenida San Rafael No. 450,<br> San Rafael, Guadalupe, N.L.</p>
                <p><i class="flaticon-envelope"></i> <a href="marianasl@patronatohrmi.com" target="_blank">marianasl@patronatohrmi.com</a></p>
                <p><i class="flaticon-technology"></i> (81) 81313232 </p>
          </div>
        </div>
    </section>
    <div class="clear top40"></div>

<?php require('footer.php'); ?>
  </body>
</html>
