<?php
	require '..\..\vendor\phpmailer\phpmailer\PHPMailerAutoload.php';

	$mail = new PHPMailer;
	// Los siguientes campos se modificarán de acuerdo al servidor de correo y al usuario remitente
	$mail->isSMTP();
	$mail->Host = 'smtp.mail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'AlejandroFV@mail.com';
	$mail->Password = convert_uudecode('(5$%/1#(P,#0`\n`\n');
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->From = 'AlejandroFV@mail.com';
	$mail->FromName = 'Car Rental System';
	$mail->addAddress($email);

	$mail->isHTML(true);

	$mail->Subject = 'Car Rental System - Las mejores promociones';
	$mail->Body    = 'Ahora est&aacutes inscrito en nuestro bolet&iacuten de novedades.<br>
						Al estar suscrito a este bolet&iacuten, podr&aacutes mantenerte enterado de todas las novedades, promociones, 
						vehículos nuevos y mucho m&aacutes.<br>
						Si tienes alguna duda o comentario, por favor cont&aacutectanos enviando un mensaje a:<br>
						<a href="mailto:AlejandroFV@mail.com">AlejandroFV@mail.com</a><br>
						O por medio de nuestro sitio web.<br>
						&iexclSaludos!';
	$mail->AltBody = 'Ahora estás inscrito a nuestro boletín de novedades '
						. 'Si tienes alguna duda o comentario, por favor contáctanos enviando un mensaje a: '
						. 'AlejandroFV@mail.com '
						. 'O por medio de nuestro sitio web.';

	if(!$mail->send()) {
	    echo 'El mensaje no fue enviado. ';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Mensaje enviado exitosamente';
	}
