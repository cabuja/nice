<?php
if ($_POST["name"]!="" and $_POST["email"]!="" and $_POST["message"]!="") {
	require_once("send/recaptchalib.php");
	// your secret key
	$secret = "6Ld6wIkUAAAAALEjn5LZyUExfp0yxFMnDikRigUc";
	// empty response
	$response = null;
	// check secret key
	$reCaptcha = new ReCaptcha($secret);
	// if submitted check response
	if ($_POST["g-recaptcha-response"]) {
	    $response = $reCaptcha->verifyResponse(
	        $_SERVER["REMOTE_ADDR"],
	        $_POST["g-recaptcha-response"]
	    );
	}
	if(isset($_POST['dejarenblanconice'])){
		$dejarenblanco = $_POST['dejarenblanconice'];
	}
	if(isset($_POST['nocambiarnice'])){
		$nocambiar = $_POST['nocambiarnice'];
	}
	require("send/class.phpmailer.php");
	if ($dejarenblanco == '' && $nocambiar == 'http://') { 
		if ($response != null && $response->success) {	
				$name = $_POST['name'];
				$email = $_POST['email'];
	//			$business = $_POST['business'];
				$message = $_POST['message'];
			
				// Form data
				/*
				$to = "carol@nice.com.ar";
				$subject = "Consulta enviada a NICE";
				$body = "Nombre: $name / E-mail: $email / Mensaje: $message";
				$headers = "From: <carol@nice.com.ar>";*/
				
				// Sending mail
				
				// Owner
				//mail($to, $subject, $body, $headers); 
				$mail = new PHPMailer();
				$mail->Host = "localhost";
				$mail->CharSet = 'UTF-8';
				$mail->From = "carol@nice.com.ar";
				$mail->FromName = "NICE";
				$mail->Subject = "Consulta enviada a NICE";
				$mail->AddAddress("carol@nice.com.ar");
				if ($varname != "") {
				$mail->AddAttachment($vartemp, $varname);
				}
				$fecha=date("d/m/y - H:i");
				$body = "<img src='https://nice.com.ar/img/Logo-Nice.png' alt='nice' width='120'><br><br>";
				$body .= "<h3><b>Consulta a NICE</b></h3>";
				$body.= "<strong>Fecha y Hora: </strong>" . $fecha . "<br>";
				$body.= "<strong>Nombre: </strong>" . $name . "<br>";
				$body.= "<strong>Email: </strong>" . $email . "<br>";
				//$body.= "<strong>Tel: </strong>" . $tel . "<br>";
				$body.= $message."<br>";
				$mail->Body = $body;
				$mail->IsHTML(true);
				$mail->Send();
				
				// User
				//mail($email, "Consulta enviada a NICE", $headers); 
				// Landing
				//header("location: enviado.php");
				echo "<script>";
					echo "alert('Hola, hemos recibido tu consulta.\t Te estaremos contactando pronto, muchas gracias por escribirnos! ')";
				echo "</script>";
				/*
				session_start(); if(isset($_SESSION["num1"]) && isset($_SESSION["num2"]) && isset($_POST["captcha"])){ $resp = $_SESSION["num1"]+$_SESSION["num2"]; $captcha = $_POST["captcha"]; if($resp==$captcha){ echo "Captcha Correcto"; }else{ echo "Captcha Incorrecto"; } }*/
		}
		else
		{
			echo "<script>alert('Debe tildar el casillero de reCaptcha')</script>";
		}
	}
}
?>