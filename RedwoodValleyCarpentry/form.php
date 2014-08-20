<?php
	$spam = $_POST['clientaddress'];
	if($spam == NULL){
		$thename = $_POST ['clientname'];
		$email = $_POST ['clientemail'];
		$phone = $_POST['clientnumber'];
		$info = $_POST ['message'];
		
		$email_proper = filter_var($email, FILTER_VALIDATE_EMAIL);
		
		$myemail = "Stephan@RedwoodValleyCarpentry.com";
		$subject = "Email from Website";
		$msg = "Client's Name: ".$thename."\n\nEmail: ".$email."\n\nPhone Number: ".$phone."\n\nMessage: ".$info;
		$extra = $email."\r\nReply To: ".$email."\r\n";
		$myURL = "http://www.redwoodvalleycarpentry.com";
		
		mail($myemail, $subject, $msg, $extra);
		header ("Location: ContactSent.php");
	}
?>