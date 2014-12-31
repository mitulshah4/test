<?php
error_reporting(-1);
	$to      = 'mitul.s@simform.in';
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: miteshkachhatiya@gmail.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	$mail = mail($to, $subject, $message, $headers);
	if($mail){
		echo "true";
	}
	else{
		echo "false";
		print_r(error_get_last());
	}
?>