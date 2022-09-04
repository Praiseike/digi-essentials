<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="assets/animate.min.css">
	<link rel="icon" type="image/png" href="assets/icons/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/gallery.css">

	<title>Gallery | Digi Essentials</title>

</head>

<body class="bg-dark">
	<main>	
		<nav class="navbar navbar-expand-lg navbar-dark px-4 bg-transparent">
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
					<li class="nav-item mx-2 my-1"><a href="#" onclick="scrollToGallery()" class="nav-link">Gallery</a></li>
				</ul>
			</div>
		</nav>

		<header id="header" class="container">
			<div id="galleyCarousel" class="carousel slide mx-auto m-1 shadow" data-bs-ride="carousel">
				<div class="carousel-inner">

					<div class="carousel-item active">
						<img src="assets/images/slides/slide-3.png" class="d-block w-100" alt="...">
					</div>

					<div class="carousel-item ">
						<img src="assets/images/slides/slide-2.png" class="d-block w-100" alt="...">
					</div>

					<div class="carousel-item ">
						<img src="assets/images/slides/slide-1.png" class="d-block w-100" alt="...">
					</div>


				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#galleyCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>

		</header><!-- /header -->

		

		<section class="gallery mt-5 p-1 container-fluid" >
			<div class="row p-0">
				<div class="column">
					<img src="assets/images/grid/s (1).png" class="gallery-image" alt="...">					
					<img src="assets/images/grid/s (2).png" class="gallery-image" alt="...">
					<img src="assets/images/grid/s (6).png" class="gallery-image" alt="...">
				</div>
				<div class="column">
					<img src="assets/images/grid/s (3).png" class="gallery-image" alt="...">
					<img src="assets/images/grid/s (4).png" class="gallery-image" alt="...">
					<img src="assets/images/grid/s (5).png" class="gallery-image" alt="...">
				</div>
				<div class="column">
					<img src="assets/images/grid/s (7).png" class="gallery-image" alt="...">
					<img src="assets/images/grid/s (8).png" class="gallery-image" alt="...">
					<img src="assets/images/grid/s (9).png" class="gallery-image" alt="...">
				</div>
			</div>
		</section>




		<div class="display-modal hidden animate__animated">
			<span class="close"><i class="fa-solid fa-x"></i></span>
			<div class="box">
				<img class="modal-image" src="">
			</div>
		</div>

		<footer class="bg-dark text-white" >
			<div class="container text-center pt-5 pb-2">
				Powered by: <span style="color:#ff9414">Digi Essentials Web Development team</span>				
			</div>
		</footer>


	<script src="assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/gallery.js"></script>
</body>
</html>