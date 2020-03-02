<?php 

if (!isset($_POST['enviar'])) {
	header('Location: ../contacto.php');
	exit();
}
else {
	// Input Fields
	$name     = $_POST['nombre'];	
	$mailFrom = $_POST['email'];
	$phone    = $_POST['telefono'];
	$company  = $_POST['empresa'];
	$cif      = $_POST['cif'];
	$address  = $_POST['domicilio'];
	$message  = $_POST['mensaje'];

	// Recaptcha
	$secretKey   = ''; // reCaptcha Secret Key
	$responseKey = $_POST['g-recaptcha-response'];
	$curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
	    CURLOPT_POST => 1,
	    CURLOPT_POSTFIELDS => array(
	        'secret' => $secretKey,
	        'response' => $responseKey
	    )
	));
	$response = curl_exec($curl);
	curl_close($curl);

	if(strpos($response, '"success": true') !== FALSE) {
		// CAPTCHA SUCCESS
		$mailTo  = ''; // Company Owner's Email Address
		$subject = 'Nuevo mensaje desde web';
		$headers = 'From: ' . $mailFrom;

		$mailBody = <<<EX
Nuevo mensaje desde VisualComunicacion.com

Nombre: {$name}
Email: {$mailFrom}
Telefono: {$phone}
Empresa: {$company}
CIF: {$cif}
Domicilio: {$address}

Mensaje:
{$message}
EX;
	
		mail($mailTo, $subject, $mailBody, $headers);
		header('Location: ../contacto.php?sent=success');
	}
	else {
		// CAPTCHA FAIL
		header('Location: ../contacto.php?captcha=fail&name=' . $name . '&email=' . $mailFrom . '&phone=' . $phone . '&company=' . $company . '&cif=' . $cif . '&address=' . $address . '&message=' . $message);
	}
}