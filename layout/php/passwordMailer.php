<?php
	require '..\..\vendor\phpmailer\phpmailer\PHPMailerAutoload.php';

	$mail = new PHPMailer;
	// Los siguientes campos se modificarán de acuerdo al servidor de correo y al usuario remitente
	$mail->isSMTP();
	$mail->Host = 'smtp.mail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'AlejandroFV@mail.com';
	$mail->Password = '';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->From = 'AlejandroFV@mail.com';
	$mail->FromName = 'Car Rental System - Support';
	$mail->addAddress($email);

	$mail->isHTML(true);

	$mail->Subject = 'Car Rental System - Solicitud de recuperacion de password';
	$mail->Body    = 'Usted ha realizado una petici&oacuten para recuperar su clave de acceso.<br>
						Todo lo que tiene que hacer es entrar en nuestro sitio web y loguearse con los siguientes datos:<br>
						<b>Email:</b> ' . $email . '<br>
						<b>Password:</b> ' . $decryptedPassword . '<br>
						Si no ha sido usted quien realiz&oacute esta petici&oacuten, simplemente ignore este correo<br>
						Si tiene alguna duda o comentario, por favor cont&aacutectenos enviando un mensaje a:<br>
						<a href="mailto:AlejandroFV@mail.com">AlejandroFV@mail.com</a><br>
						O por medio de nuestro sitio web.<br>
						&iexclSaludos!';
	$mail->AltBody = 'Petición de solicitud de password. Email: ' . $email . ', Password: ' . $decryptedPassword . ' '
						. 'Si tienes alguna duda o comentario, por favor contáctanos enviando un mensaje a: '
						. 'AlejandroFV@mail.com '
						. 'O por medio de nuestro sitio web.';

	if(!$mail->send()) {
	    echo 'El mensaje no fue enviado. ';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Mensaje enviado exitosamente';
	}
