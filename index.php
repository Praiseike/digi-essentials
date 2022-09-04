<?php
	session_start();
	if(isset($_SERVER['HTTPS']))
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
	<link rel="icon" type="image/png" href="assets/icons/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/animate.min.css">

	<title>Digi Essentials</title>
</head>
<body>
	<div class="loader animate__animated">
		<div class="loader__content">
			<div class="img__container shadow">
				<img src="assets/icons/loader.png">
				<div class="loader__line"></div>
			</div>
		</div>
	</div>
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
			        <li class="nav-item mx-2 my-1"><a href="blog.php" class="nav-link">Blog</a></li>
			        <li class="nav-item mx-2 my-1"><a href="gallery.php" class="nav-link">Gallery</a></li>
			        <li class="nav-item mx-2 my-1"><a href="#" onclick="scrollToAbout()" class="nav-link">About us</a></li>
			        <li class="nav-item mx-2 my-1"><a href="#" onclick="scrollToContact()" class="nav-link">Contact us</a></li>
		      	</ul>
		      	<div class="nav-socials">
					<a href="https://facebook.com/profile.php?id=100084644506506" title="Facebook">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="https://instagram.com/digiessentials_" title="Instagram">
						<i class="fab fa-instagram"></i>
					</a>
		      	</div>	
		    </div>
		</nav>

		<section class="section section__banner">
<!-- 			<h1 class="banner__text animate__animated animate__fadeInLeft">We offer<br> the best of digital services.</h1>
			<div class="btn btn-primary">
				CONTACT US
			</div> -->
			<img src="./assets/icons/tech-rings.svg" class="header-image" alt="rings">
			<div class="container">
				<div class="row">
					<div class="col-md-7 animate__animated" id="banner">
						<h1 class="banner__text text-dark">We Offer<br> The Best of Digital Services.</h1>
						<button onclick="scrollToContact()" class="cButton mt-5 animate__animated animate__pulse animate__infinite">CONTACT US</button>
					
						<!-- <button onclick="scrollToContact()" class="cButton mt-5">CONTACT US</button> -->
					</div>
				</div>
			</div>	

		</section>


		<section id="section__about_us" class="section text-center py-4 bg-dark">
			<div class="container animate__animated hidden" animation-type="animate__fadeInLeft" >
				<h2 class="text-light">ABOUT US</h2>
				<p>
					Here at Digi Essentials, we ensure our clients get the best digital services to increase efficiency and productivity in their respective businesses. The likes of our services include, but are not limited to web development, graphic design, social media management, and copywriting.
				</p>
			</div>
		</section>



		<section class="section__services" >
			<div id="header_text" class="services_text text-center p-4 ">
				<div class="animate__animated hidden" animation-type="animate__fadeInRight" >				
					<h2 class="text-dark" >OUR SERVICES</h2>
					<h5>check out our quality assured services</h5>
				</div>
			</div>
			<article class="service_display" id="static_image-1">
				<div class="container p-5 animate__animated hidden" animation-type="animate__zoomIn" >
					<div class="row mb-4" >
						<div class="col-sm-3 col-md-3 mb-3">
							<div class="card mx-auto">
								<div class="card-body">
									<div class="card-icon">
										<i class="fa-solid fa-compass-drafting"></i>
									</div>
								</div>
								<div class="card-footer text-center">
									Creative Branding
								</div>
							</div>
						</div>

						<div class="col-sm-3 col-md-3 mb-3">
							<div class="card mx-auto">
								<div class="card-body">
									<div class="card-icon">
										<i class="fa-brands fa-figma"></i>
									</div>
								</div>
								<div class="card-footer text-center">
									UI/UX Design
								</div>
							</div>
						</div>

						<div class="col-sm-3 col-md-3 mb-3">
							<div class="card mx-auto">
								<div class="card-body">
									<div class="card-icon">
										<i class="fa-solid fa-palette"></i>
									</div>
								</div>
								<div class="card-footer text-center">
									Graphic Design
								</div>
							</div>
						</div>

						<div class="col-sm-3 col-md-3  mb-3">
							<div class="card mx-auto">
								<div class="card-body">
									<div class="card-icon">
										<i class="fas fa-laptop-code"></i>
									</div>
								</div>
								<div class="card-footer text-center">
									Web Development
								</div>
							</div>
						</div>

					</div>

					<div class="row mb-4">
						<div class="col-sm-3 col-md-3 mb-3">
							<div class="card mx-auto">
								<div class="card-body">
									<div class="card-icon">
										<i class="fa-solid fa-pen"></i>
									</div>
								</div>
								<div class="card-footer text-center">
									Copywriting
								</div>
							</div>
						</div>

						<div class="col-sm-3 col-md-3 mb-3">
							<div class="card mx-auto">
								<div class="card-body">
									<div class="card-icon">
										<i class="fa-solid fa-file-powerpoint"></i>
									</div>
								</div>
								<div class="card-footer text-center">
									PowerPoint Presentation
								</div>
							</div>
						</div>

						<div class="col-sm-3 col-md-3 mb-3">
							<div class="card mx-auto">
								<div class="card-body">
									<div class="card-icon">
										<i class="fa-solid fa-hashtag"></i>
									</div>
								</div>
								<div class="card-footer text-center">
									Social Media Management
								</div>
							</div>
						</div>

						<div class="col-sm-3 col-md-3  mb-3">
							<div class="card mx-auto">
								<div class="card-body text-center">
									<div class="card-icon">
										<i class="fa-solid fa-mobile-screen"></i>
									</div>
								</div>
								<div class="card-footer text-center fs-9">
									App Development<br>(Android & iOS)										
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>

		<section class="py-5">
			<div class="container py-3 animate__animated hidden" animation-type="animate__fadeInLeft" >
				<h2>OUR STRATEGY</h2>
				<p class="text-dark">
					In an attempt to attain perfection in our services, we carry out deep research to uncover insights about your competitors, target group, and industry trends. We reach out to similar brands and conduct a visual analysis of what similar successful competitors are doing within the market. This research will help us identify opportunities to take advantage of, making our clients stand out in the crowd.
				</p>
				<button onclick="scrollToContact()" class="cButton mt-3">CONTACT US</button>

			</div>

		</section>


		<section class="section__count py-3 text-light" id="static_image-2" >
			<div class="container mx-auto py-5 hidden counter_container">
				<div class="row">
					<div class="col-sm-4 text-center mb-3">
						<div class="segment_display counter bg-dark" data-value="103"></div>
						<h4>Projects Delivered</h4>
					</div>

					<div class="col-sm-4 text-center mb-3">
						<div class="segment_display counter bg-dark" data-value="87"></div>
						<h4>Satisfied Clients</h4>
					</div>

					<div class="col-sm-4 text-center mb-3">
						<div class="segment_display counter bg-dark" data-value="5"></div>
						<h4>Award winings</h4>
					</div>
				</div>
			</div>
		</section>


		<section class="section__contact bg-dark" id="section__contact_us">
			<div class="container pt-5 text-center animate__animated hidden" animation-type="animate__bounce">
				<h1 class="m-2">CONTACT</h1>
				<h5>We create the best opportunities for your business</h5>
			</div>
			<div class="container py-4">
				<form class="container w-75 my-5 ">
					<input type="hidden" name="_token" value="<?= $_SESSION['csrf'] ?>">
					<div class="row">
						<div class="form-group col-md-6 mb-3">
							<label>Your Name *</label>
							<input type="text" name="name" required placeholder="e.g John Doe" class="form-control">
						</div>
						<div class="form-group col-md-6 mb-3">
							<label>E-Mail *</label>
							<input type="email" name="email" placeholder="example@gmail.com" required class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12 mb-3">
							<label>Tell Us Everything *</label>
							<textarea class="form-control" placeholder="Enter text here" required name="message"></textarea>
						</div>
					</div>

						<button type="submit" name="submit" class="cButton rounded">
							<div class="spinner-border text-white" hidden>
								<span class="visually-hidden">
									Loading...
								</span>
							</div>
							<span>submit</span>
						</button>						
				</form>
			</div>
			<div class="socials bg-dark">
				<!-- Facebook -->
				<a href="https://facebook.com/profile.php?id=100084644506506" title="Facebook">
					<i class="fab fa-facebook-f"></i>
				</a>
				<!-- Instagram -->
				<a href="https://instagram.com/digiessentials_" title="Instagram">
					<i class="fab fa-instagram"></i>
				</a>
			</div>

		</section>

	</main>

	<div class="custom-modal-container modal-hidden">
		<div class="custom-modal shadow-lg">
			<div class="modal-header">
				<strong id="modal-header-text"></strong>
				<button type="button" class="btn-close"></button>
			</div>
			<div class="modal-body">
			</div>
		</div>		
	</div>


	<footer class="bg-dark text-white" >	
		<div class="container text-center pt-5 pb-2">
			Powered by: <span style="color:#ff9414">Digi Essentials Web Development Team</span>				
		</div>
	</footer>

	<script src="assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<script src="assets/js/script.js"></script>

</body>
</html>