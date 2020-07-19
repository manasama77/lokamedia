<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=yes" />
	<meta name="author" content="<?=APP_AUTHOR;?>" />
	<meta name="description" content="<?=APP_DESCRIPTION;?>" />
	<title>LOKAMEDIA</title>
	<link rel="icon" type="image/x-icon" href="<?=base_url();?>assets/img/favicon.ico" />
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body id="page-top">

	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">LOKA MEDIA</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About Us</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#service">Our Services</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#why">Why Us</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- Carousel -->
	<?php $this->load->view('partials/carousel'); ?>

	<!-- About-->
	<section class="about-section text-center" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2 class="text-dark mb-4">About Us</h2>
					<p class="text-dark">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dicta, cumque assumenda culpa maiores omnis totam obcaecati voluptas eligendi sapiente enim debitis illo dolore facilis in, nihil perspiciatis et perferendis recusandae esse asperiores quas. Magnam at quia minima soluta explicabo nulla commodi quo dignissimos inventore temporibus, voluptatum praesentium unde a.
					</p>
				</div>
			</div>
			<img class="img-fluid" src="assets/img/ipad.png" alt="" />
		</div>
	</section>

	<!-- OUR SERVICES-->
	<section class="service-section bg-light" id="service">
		<div class="container">
			<!-- SERVICE 1 -->
			<div class="row align-items-center no-gutters mb-4 mb-lg-5">
				<div class="col-12 mb-5">
					<h2>Our Services</h2>
				</div>
				<div class="col-xl-7 col-lg-7">
					<img class="img-fluid mb-3 mb-lg-0" src="assets/img/001-desktop.png" alt="" />
				</div>
				<div class="col-xl-5 col-lg-5">
					<div class="featured-text text-center text-lg-left">
						<h4>Dekstop Development</h4>
						<p class="text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quia deserunt temporibus quidem nihil laboriosam saepe ipsum voluptates incidunt nemo.</p>
					</div>
				</div>
			</div>

			<!-- SERVICE 2 -->
			<div class="row justify-content-center no-gutters mb-5">
				<div class="col-lg-5 mt-1 mb-1 mr-lg-3">
					<img class="img-fluid" src="assets/img/002-script.png" alt="" />
				</div>
				<div class="col-lg-6">
					<div class="bg-black text-center h-100 project">
						<div class="d-flex h-100">
							<div class="service-text w-100 my-auto text-center text-lg-left">
								<h4 class="text-white">Web Development</h4>
								<p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, molestias in commodi quisquam a neque modi ducimus debitis cumque quam.</p>
								<hr class="d-none d-lg-block mb-0 ml-0" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- SERVICE 3 -->
			<div class="row justify-content-center no-gutters mb-5">
				<div class="col-lg-5 mt-1 mb-1 ml-lg-3">
					<img class="img-fluid" src="assets/img/003-cross-platform.png" alt="" />
				</div>
				<div class="col-lg-6 order-lg-first">
					<div class="bg-black text-center h-100 project">
						<div class="d-flex h-100">
							<div class="service-text w-100 my-auto text-center text-lg-right">
								<h4 class="text-white">Mobile Development (IOS & ANDROID)</h4>
								<p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam excepturi laboriosam architecto explicabo laborum tempora nesciunt odit sint natus amet.</p>
								<hr class="d-none d-lg-block mb-0 mr-0" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- SERVICE 4 -->
			<div class="row justify-content-center no-gutters mb-5">
				<div class="col-lg-5 mt-1 mb-1 mr-lg-3">
					<img class="img-fluid" src="assets/img/004-ui-design.png" alt="" />
				</div>
				<div class="col-lg-6">
					<div class="bg-black text-center h-100 project">
						<div class="d-flex h-100">
							<div class="service-text w-100 my-auto text-center text-lg-right">
								<h4 class="text-white">UI/UX</h4>
								<p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat provident, sequi hic est, molestiae iste totam in minus delectus quibusdam?</p>
								<hr class="d-none d-lg-block mb-0 mr-0" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- SERVICE 5 -->
			<div class="row justify-content-center no-gutters mb-5">
				<div class="col-lg-5 mt-1 mb-1 ml-lg-3">
					<img class="img-fluid" src="assets/img/005-digital-marketing.png" alt="" />
				</div>
				<div class="col-lg-6 order-lg-first">
					<div class="bg-black text-center h-100 project">
						<div class="d-flex h-100">
							<div class="service-text w-100 my-auto text-center text-lg-right">
								<h4 class="text-white">Digital Marketing</h4>
								<p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, facilis explicabo omnis nesciunt quos voluptatum obcaecati quam cupiditate quia recusandae.</p>
								<hr class="d-none d-lg-block mb-0 mr-0" />
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- WHY US -->
	<section class="projects-section bg-dark" id="why">
		<div class="container">
			<!-- Featured Project Row-->
			<div class="row align-items-center no-gutters mb-4 mb-lg-5">
				<div class="col-xl-6 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/think.png" alt="" /></div>
				<div class="col-xl-6 col-lg-5">
					<div class="featured-text text-center text-lg-left">
						<h4 class="text-white">Why Us</h4>
						<p class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi suscipit, laboriosam deleniti illum eum quis, eligendi non ullam optio labore odit cum laudantium. Nemo praesentium, reprehenderit aut officiis officia, laudantium, necessitatibus nihil eligendi et dolorum, architecto in natus molestias iusto.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Signup-->
	<!-- <section class="signup-section" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-lg-8 mx-auto text-center">
					<i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
					<h2 class="text-white mb-5">Subscribe to receive updates!</h2>
					<form class="form-inline d-flex">
						<input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email" placeholder="Enter email address..." />
						<button class="btn btn-warning mx-auto" type="submit">Subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</section> -->

	<!-- Contact-->
	<section class="contact-section" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-3 mb-md-0">
					<div class="card py-4 h-100">
						<div class="card-body text-center">
							<i class="fas fa-map-marked-alt mb-2" style="color: rgba(255, 138, 0, 1)"></i>
							<h4 class="text-uppercase m-0">Address</h4>
							<hr class="my-4" />
							<div class="small text-black-50">4923 Market Street, Orlando FL</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3 mb-md-0">
					<div class="card py-4 h-100">
						<div class="card-body text-center">
							<i class="fas fa-envelope mb-2" style="color: rgba(255, 138, 0, 1)"></i>
							<h4 class="text-uppercase m-0">Email</h4>
							<hr class="my-4" />
							<div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3 mb-md-0">
					<div class="card py-4 h-100">
						<div class="card-body text-center">
							<i class="fas fa-mobile-alt mb-2" style="color: rgba(255, 138, 0, 1)"></i>
							<h4 class="text-uppercase m-0">Phone</h4>
							<hr class="my-4" />
							<div class="small text-black-50">+1 (555) 902-8832</div>
						</div>
					</div>
				</div>
			</div>
			<div class="social d-flex justify-content-center">
				<a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
				<a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
				<a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
			</div>
		</div>
	</section>

	<!-- Footer-->
	<footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Loka Media 2020</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="<?=base_url();?>assets/js/scripts.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper('.swiper-container', {
			speed: 2000,
			lazy: true,
			slidesPerView: 1,
			centerSlides: true,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			loop: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	</script>
</body>
</html>
