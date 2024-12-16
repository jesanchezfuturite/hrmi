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
    <meta name="author" content="https://www.plexoweb.com" />
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
        $(document).foundation('reveal', 'reflow');
      });

      function send()
      {			
        $.post("process/voluntarios.php", $("#Contacto2").serialize(), function(data) {
          $("#notificaciones").html('<div class="warning-box" style="width:230px">'+ data +'</div>');
           $("#Contacto2")[0].reset();		
        });
      }
     
    </script>
	<script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>

  </head>
  <body>

<?php require("header.php"); ?>
    
    <div class="clearfix"></div>

    <section class="voluntariado">
      <div class="row">
        <div class="large-10 medium-9 small-12 columns text-center">
          <h2 class="">Voluntariado</h2>
          <p>El Programa Integral de Voluntariado es un valioso apoyo para los pacientes que pasan largas estancias en el Hospital; mejora su estado de ánimo y así influye positivamente en su salud. </p>
        </div>
      </div>
    </section>
     
 <div class="clearfix"></div>
     <section class="bg-gris2">
      <div class="row">
        <div class="large-7 medium-6 small-12 columns top40">
          <p>Los pacientes que necesitan permanecer más tiempo hospitalizados, generalmente se encuentran en una situación vulnerable y difícil. Es por ello que el <b class="verde">Programa Integral de Voluntariado</b> brinda una atención especial mediante actividades y talleres que permiten mejorar la estancia de los pacientes en el hospital.</p>
          <p><b class="rosa">Empresas, Grupos Estudiantiles, Asociaciones y personas con interés de ayudar</b>, se han sumado a nuestras diferentes plataformas de Voluntariado para generar un movimiento de asistencia social que logre brindar momentos de calidad a nuestros pacientes.</p>
          <br>
          <a href="#" data-reveal-id="voluntarios" class="button round">¿Queres ser voluntario?</a>
        </div>
        <div class="large-5 medium-6 small-12 columns">
          <img src="img/s-voluntariado2.png" alt="Hospital Regional Materno Infantil">
        </div>
      </div>
    </section>
    <div class="clear top40"></div>
    <section>
      <div class="row">
        <div class="large-6 medium-6 small-12 columns">
          <img src="img/s-voluntariado.png" alt="Hospital Regional Materno Infantil">
        </div>
        <div class="large-6 medium-6 small-12 columns">
          <p><b class="verde">El Programa Integral de Voluntariado</b> cuenta con diferentes áreas recreativas y de trabajo, en las que los voluntarios pueden compartir su tiempo según su afinidad.</p>
            <ul>
              <li><b class="rosa">Ludoteca:</b> Área recreativa y de entretenimiento en el cual voluntarios y pacientes comparten su tiempo a través de juegos de mesa y otras actividades.</li>
              <li><b class="rosa">Entrega de Kits Patronato:</b> Diariamente formamos kits con artículos que donan empresas para entregar a todas las mamás que se alivian en nuestro hospital.</li>
              <li><b class="rosa">Sigamos Aprendiendo:</b> Apoyados de una infraestructura tecnológica y el programa de la SEP, se apoya a la maestra a dar seguimiento escolar a todos los pacientes que se encuentran en nuestro hospital.</li>
              <li><b class="rosa">Taller de Artes:</b> Guiados por una especialista se enseña a los pacientes diferentes formas de aprender y divertirse, utilizando colores, pinturas, marionetas, entre otras actividades.</li>
              <li><b class="rosa">Acompañamiento:</b> Se da compañía a pacientes que por sus condiciones de hospitalización les es complicado salir de su habitación.</li>
            </ul>
        </div>
      </div>
    </section>
    <div class="clear top40"></div>
    <section>
      <div class="row">
        <div class="large-3 medium-3 small-12 columns text-center nums">
          <img src="img/ic-hosp.jpg" alt="">
          <p><span>4</span><br>
            Años con el Programa Integral <br> de Voluntariado 
          </p>
        </div>
        <div class="large-3 medium-3 small-12 columns text-center nums bdr-left">
          <img src="img/ic-kits.jpg" alt="">
          <p><span>30,000</span><br> 
            Kits con artículos de higiene para las mamás que reciben a su bebé con nosotros.
          </p>
        </div>
        <div class="large-3 medium-3 small-12 columns text-center nums bdr-left">
          <img src="img/ic-vols.jpg" alt="">
          <p><span>400</span><br>
            Voluntarios que dividimos en<br> los 5 días de la semana
          </p>
        </div>
        <div class="large-3 medium-3 small-12 columns text-center nums bdr-left">
          <img src="img/ic-child.jpg" alt="">
          <p><span>20,760</span><br>
            Pacientes pediátricos y <br> sus familias beneficiados
          </p>
        </div>
      </div>
    </section>

     <div class="clear top40"></div>

<?php require('footer.php'); ?>

<!-- ModAL VoluntariOS -->
<div id="voluntarios" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 class="verde" id="modalTitle">¿Quieres ser voluntario?</h2>
  <p class="lead">Envíanos tus datos</p>
  <div class="large-12 medium-12 small-12 columns">
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
<a class="close-reveal-modal" aria-label="Close">&#215;</a>
  </body>
</html>
