<?php
	session_start();
	if(!isset($_SERVER['HTTPS']))
	{
	    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
	    exit();
	}


	// generate csrf token	
	$_SESSION['csrf'] = sha1(rand());

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.9">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="assets/animate.min.css">
	<link rel="icon" type="image/png" href="assets/icons/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/blog.css">

	<title>Digi Essentials</title>
</head>
<body>
	<main>	
		<nav class="navbar navbar-expand-lg navbar-light px-4 bg-transparent">
			<a class="navbar-brand" href="index.php">
				<img src="assets/icons/logo2.svg" class="brand-image">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
	    		<ul class="navbar-nav">
		        	<li class="nav-item mx-2 my-1"><a href="index.php" class="nav-link">Home</a></li>
			        <li class="nav-item mx-2 my-1"><a href="#" class="nav-link">Blog</a></li>
			        <li class="nav-item mx-2 my-1"><a href="gallery.php" class="nav-link">Gallery</a></li>
			        <li class="nav-item mx-2 my-1"><a href="#" onclick="scrollToAbout()" class="nav-link">About us</a></li>
			        <li class="nav-item mx-2 my-1"><a href="#" onclick="scrollToContact()" class="nav-link">Contact us</a></li>
		      	</ul>
		    </div>
		</nav>


		<section class="container mt-5 pt-5">
			<div class="container p-5 bg-dark text-light text-center">
				<h1>COMING SOON</h1>
				<button class="cButton" onclick="back()"><i class='fa-solid fa-arrow-left'></i> HOME</button>
			</div>
		</section>

	<script src="assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<script src="assets/js/blog.js"></script>

	<script>
		const back  = () => {
			window.location = 'index.php'
		}
	</script>
</body>
</html>