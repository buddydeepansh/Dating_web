<?php
	$name = $_POST['name'];
	$vtr_email=$_POST['email'];
	$msg=$_POST['message'];
	$email_form="tifiko5096@4xmail.net";
	$email_sub="NEW FORM SUBMISSION";
	$email_body= "USER NAME:  $name.\n".
					"USER EMAIL : $vtr_email.\n".
						"USER MESSAGE : $msg.\n";
	$to = "tifiko5096@4xmail.net";
	$headers = "From: $email_form \r\n";
	$headers = "Repay-to : $vtr_email \r\n";
	mail($to, $email_sub, $email_body,$headers);
	 header("location: Contact.html");
?>
