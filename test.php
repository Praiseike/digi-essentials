<?php 


	echo phpinfo();

 	$to = "support@digi-essentials.com";
 	$subject = "Client Request";
 	$message ="hello from the other side";
 	$email = "praiseike123@gmail.com";
 	$headers = "From:".$email."\r\n";
 	$headers .= "Content-Type: text/html;charset=iso-8859-1rn";

 	if(mail($to,$subject,$message,$headers)){
 		echo "Mail Sent";
 		exit();
 	}
 	echo "Failed to send mail";
 	exit();
