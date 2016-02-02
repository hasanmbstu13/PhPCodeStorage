<?php 
	
	$to = "hasanmbstu13@gmail.com";

	// handle to variable
	// $to = "Kevin Skoglund <junkmai@novafabrica.com>";
	
	// multiple recipients
	// $to = "junkmail@novafabrica.com, nobody@novafabrica.com";
	// $to = "Kevin Skoglund <junkmai@novafabrica.com>,nobody@novafabrica.com";
	$subject = "Mail Test at ".strftime("%T",time());

	$message = "This is a test.";
	// Optional: Wrap lines for old email programs
	// // wrap at 70/72/75/78
	// $message = wordwrap($message,70);

	// $from = "mainulmbstu11@gmail.com";
	// $headers = "From:{$from}";

	// $result = mail($to, $subject, $message, $headers);
	$result = mail("hasanmbstu13@gmail.com", "Hello", "Hi");
	echo $result ? 'Sent' : 'Error';
?>