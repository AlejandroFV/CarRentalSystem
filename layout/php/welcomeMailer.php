<?php
	require '..\..\vendor\phpmailer\phpmailer\PHPMailerAutoload.php';

	$mail = new PHPMailer;
	// Los siguientes campos se modificarán de acuerdo al servidor de correo y al usuario remitente
	$mail->isSMTP();
	$mail->Host = 'smtp.mail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'AlejandroFV@mail.com';
	// El password lo dejo en blanco. Se llenará el campo solo para fines de demostración
	$mail->Password = '';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->From = 'AlejandroFV@mail.com';
	$mail->FromName = 'CRS Webmaster';
	$mail->addAddress($email);

	$mail->isHTML(true);

	$mail->Subject = 'Bienvenido a Car Rental System';
	$mail->Body    = 'Aquí encontrarás los mejores vehículos para alquiler con <b>los mejores precios</b> existentes.<br>
						Al ser un usuario registrado. Tendrás acceso a <u>las mejores promociones</u>, 
						exclusivamente para miembros premium.<br>
						Si tienes alguna duda o comentario, por favor contáctanos enviando un mensaje a:<br>
						<a href="mailto:AlejandroFV@mail.com">AlejandroFV@mail.com</a><br>
						O por medio de nuestro sitio web.<br>
						¡Saludos!';
	$mail->AltBody = 'Aquí encontrarás los mejores vehículos para alquiler con los mejores precios existentes. '
						. 'Si tienes alguna duda o comentario, por favor contáctanos enviando un mensaje a: '
						. 'AlejandroFV@mail.com '
						. 'O por medio de nuestro sitio web.';

	if(!$mail->send()) {
	    echo 'El mensaje no fue enviado. ';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Mensaje enviado exitosamente';
	}
