<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Gracias por escribirnos, lo contactaremos lo antes posible'
	);

    $name = @trim(stripslashes($_POST['Nombre'])); 
    $email = @trim(stripslashes($_POST['Email'])); 
    $subject = @trim(stripslashes($_POST['Asunto'])); 
    $message = @trim(stripslashes($_POST['Mensaje'])); 

    $email_from = $email;
    $email_to = 'ventas@sendaseditorial.com';//replace with your email

    $body = 'Nombre: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Asunto: ' . $subject . "\n\n" . 'Mensaje: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;