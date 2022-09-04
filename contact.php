<?php 

	session_start();

	include "mail.php";

	header("content-type: application/json");

	// header('HTTP/1.0 404 File not Found in heaven');

	ini_set('display_errors',1);


	function verifyToken(){

		if(isset($_SESSION['csrf'],$_POST['_token'])){
			$token = $_POST['_token'];
			if($token == $_SESSION['csrf']){
				return True;
			}
		}

		return False;
	}


	if(isset($_POST['name'])){

		// first verify our csrf token

		if(!verifyToken()){

	 		echo json_encode([

	 			'header'=>'Page expired',

	 			'status'=>'failure',

	 			'message'=>"This form has expired, please refresh the page and try again"

	 			]);

			exit();

		}


		$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);

		$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);

		$message = htmlspecialchars($_POST['message']);





	 	$to = "support@digi-essentials.com";

	 	$subject = "Client Request";






	 	if(sendmail($email,$name,$subject,$message)){

	 		echo json_encode([

	 			'header'=>'Message Sent',

	 			'status'=>'success',

	 			'message'=>"Thank you for contacting us, we'll get back to you as soon as possible through your email."

	 			]);

	 		exit();

		}else{

	 		echo json_encode([

	 			'status'=>'failure',

	 			'header'=> 'An Error Occured',

	 			'message'=> "Sorry We are unable to process your request. Please refresh the page and try again"

	 		]);

	 		exit();

		}



	}else{

		echo "GET method not supported for this route";

	}

