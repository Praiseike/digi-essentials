<?php 
	// error_reporting(E_ALL);
	// ini_set("display_errors",1);

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/SMTP.php';


	function sendmail($email,$name,$subject,$message){


		$mail = new PHPMailer(true);
		
		try {
			// $mail->SMTPDebug = 2;									   
			$mail->isSMTP();											
			$mail->Host	   = 'digi-essentials.com;';					
			$mail->SMTPAuth   = true;							 
			$mail->Username   = 'auto@digi-essentials.com';				 
			$mail->Password   = 'Willliamsike@1996';						
			$mail->SMTPSecure = 'tls';
			$mail->Port	   = 587;  
			
			$mail->setFrom($email, $name);		   
			$mail->addAddress('contact@digi-essentials.com');
			$mail->addAddress('digiessentials4u@gmail.com');
			// $mail->addAddress('receiver2@gfg.com', 'Name');
			   
			$mail->isHTML(true);								  
			$mail->Subject = $subject;
			$mail->Body	= $message;;
			$mail->AltBody = $message;
			$mail->send();
			return true;
		} catch (Exception $e) {
			return false;
		}

	}

