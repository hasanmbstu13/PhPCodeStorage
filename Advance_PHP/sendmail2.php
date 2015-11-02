<?php
	
	require_once("../photo_gallery/includes/phpMailer/class.phpmailer.php");
	require_once("../photo_gallery/includes/phpMailer/class.smtp.php");
	require_once("../photo_gallery/includes/phpMailer/language/phpmailer.lang-en.php");

	$to = "Mainul Hasan"; 
	$to = "hasanmbstu13@gmail.com"; 
	$subject = "Mail Test at ".strftime("%T", time());
	$message = "This is a test."; 
	$message = wordwrap($message,70);
	$from_name = "Mainul Hasan";
	$from = "<hasanmbstu13@gmail.com>";
	
	$result = mail($to, $subject, $message, $headers);
	echo $result ? 'Sent' : 'Error';

?>