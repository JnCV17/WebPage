<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
$to = 'jncvg17@hotmail.com';
$email_subject = "Website Contact Form:  $name";
$email_body = "Has recibido un mensaje desde tu sitio web de contacto.\n\n"."Aqui estan los detalles:\n\nNombre: $name\n\nCorreo Electronico: $email_address\n\nMensaje:\n$message";
$headers = "De: jncvg17@hotmail.com\n";
$headers .= "Responder a: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>