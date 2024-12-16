<?php
require_once "includes/recaptchalib.php"; 
?>

<!DOCTYPE html>
<html class="no-js" lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	




  </head>
  <body>

<?php require("header.php"); ?>
    
    <div class="clearfix"></div>

   
     
    
     
 <div class="clearfix"></div>

     <section>
      <iframe width="100%" height="800" src="https://patronatohrmi.com/rv/index.htm" frameborder="0" allowfullscreen></iframe> 
      <div class="row">
        
          
        </div>
    </section>
    

<?php require('footer.php'); ?>
  </body>
</html>
