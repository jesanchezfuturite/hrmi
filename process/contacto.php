<?php 
	session_start();
	include("includes/configuracion.php");
	require_once('PhpMailer/class.phpmailer.php');
	require_once "includes/recaptchalib.php"; 
	 $secret = "6LcFNysUAAAAABtuZTrM9UDGd8vkzS7pIF2aQ-Cl";
	 $response = null;
	 // comprueba la clave secreta
	 $reCaptcha = new ReCaptcha($secret);
	
	 if ($_POST["g-recaptcha-response"]) {
	     $response = $reCaptcha->verifyResponse(
	     $_SERVER["REMOTE_ADDR"],
	     $_POST["g-recaptcha-response"]
	     );
	  }
	 
	
	 if ($response != null && $response->success) {
	    // Si el código es correcto, seguimos procesando el formulario como siempre
		//**********************************
		// Captura del $_POST y generacion de variables
		//**********************************
		$nombre = fValidateString(@$_POST['nombre']);
		$tel = fValidateString(@$_POST['tel']);
		$email_contact = fValidateString(@$_POST['email']);
		$mensaje = fValidateString(@$_POST['mensaje']);	
	
		
		//**********************************
		// Validaciones
		//**********************************
		if(strlen($nombre)==0){echo json_encode(array('status' =>'error','message'=>'El campo nombre es obligatorio'));exit();}
		if(strlen($email_contact)==0){echo json_encode(array('status' =>'error','message'=>'El campo email es obligatorio'));exit();}
		if(!isValidEmail($email_contact)){echo json_encode(array('status' =>'error','message'=>'El campo email debe ser un email valido'));exit();}
	
		
		//**********************************
		// Mail del admin
		//**********************************
		$mail = new PHPMailer();
		$archivo = file_get_contents('templates/mensaje_administrador.html');
		$archivo = str_replace("[nombre]", utf8_decode($nombre), $archivo);
		$archivo = str_replace("[tel]", utf8_decode($tel), $archivo);
		$archivo = str_replace("[email]", $email_contact, $archivo);
		$archivo = str_replace("[mensaje]", utf8_decode($mensaje), $archivo);
	
		$mail->IsSMTP();
		$mail->Host       = '67.23.233.136';
		$mail->SMTPDebug  = 0;
		$mail->SMTPAuth   = true;		
		$mail->Port       = 587;
		$mail->Username   = 'info@patronatohrmi.com';
		$mail->Password   = 'iNFo.2017';
		$mail->SetFrom($email_contact, ' ');
		$mail->Subject    = 'Mensaje desde la forma de contacto de Patronato Hospital Materno ';
		$mail->AltBody    = 'Mensaje desde la forma de contacto de Patronato Hospital Materno  ';
		$mail->MsgHTML($archivo);
		
		
		$address = 'info@patronatohrmi.com';
		$mail->AddAddress($address, 'Mensaje desde la forma de contacto de Patronato Hospital Materno  ');
		$mail->Send();
		
		//**********************************
		//Mail de autorrespuesta
		//**********************************
		$mail             = new PHPMailer();
		$body             = file_get_contents('templates/mensaje_autorespuesta.html');
		
		$mail->IsSMTP();
		$mail->Host       = '67.23.233.136';
		$mail->SMTPDebug  = 0;
		$mail->SMTPAuth   = true;		
		$mail->Port       = 587;
		$mail->Username   = 'info@patronatohrmi.com';
		$mail->Password   = 'iNFo.2017';
		$mail->SetFrom('test@mkt.influx.com.mx', 'Patronato Hospital Materno ');
		$mail->Subject    = 'Mensaje desde Patronato Hospital Materno ';
		$mail->AltBody    = 'Mensaje desde Patronato Hospital Materno ';
		$mail->MsgHTML($body);
		$address = $email_contact;
		$mail->AddAddress($address, 'Mensaje desde Patronato Hospital Materno ');
		$mail->Send();
				
		
		echo json_encode(array('status' =>'success','message'=>'su mensaje ha sido enviado, gracias por contactarnos'));exit();	    
	  } else {
	  	echo json_encode(array('status' =>'error','message'=>'error captcha'));exit();
	    // Si el código no es válido, lanzamos mensaje de error al usuario
	  }	
	
?>