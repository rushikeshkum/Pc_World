<?php

session_start();

if(!isset($_SESSION['username'] )){
	header('location:login.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<!--www.divinectorweb.com-->

<head>
	<meta charset="UTF-8">
	<title>bootstrap 5 homepage template</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/stylefooter.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<title> pc World main</title>

</head>

<body>

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><span>PC </span>WORLD</a> <button aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
				data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span
					class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="main.php">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="prebuiltpc.php">Prebuilt PC</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="buildpc.php">Build PC</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="components.php">Components</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="contactus.php">Contact us</a>
					</li>
					
					<li class="nav-item">
						<a class="getstarted" href="logout.php">Logout </a>
					</li>
					<li class="nav-item">
						<a class="nav-link " id="user" >Welcome <?php  echo  $_SESSION['username']; ?></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- login register popup start rus -->


	<!-- login register popup start rus -->

	<!-- banner -->
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators"
				type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1"
				data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3"
				data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="https://dlcdnrog.asus.com/rog/media/1644549597584.webp">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">Prebuild pc</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">Best prebuild pc </p>
					<p class="animated fadeInUp" style="animation-delay: 3s"><a href="buildpc.php">Visit </a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100"
					src="https://smcinternational.in/extra/amd/images/Hero-Ryzen7000.jpg">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">PC components</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">Best selected pc components</p>
					<p class="animated fadeInUp" style="animation-delay: 3s"><a href="buildpc.php">Visit</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://images6.alphacoders.com/693/693891.jpg">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">Every information</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">Easy to know about computer components</p>
					<p class="animated fadeInUp" style="animation-delay: 3s"><a href="buildpc.php">Visit</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
			type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
				class="visually-hidden">Previous</span></button> <button class="carousel-control-next"
			data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true"
				class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>
	<!-- antpc -->
	<section class="categoryH-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="categoryH-secInn">
				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-12 categoryH-box aos-init aos-animate" data-aos="fade-up">
						<div class="categoryH-boxInn">
							<img src="https://www.ant-pc.com/assets/2022-theme/images/workstation-sm.png" alt=""
								class="img-fluid">
							<h4 class="categoryH-box-heading">Workstation</h4>
							<a href="prebuiltpc.php" class="btn-comm">
								View More
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 categoryH-box aos-init aos-animate" data-aos="fade-up">
						<div class="categoryH-boxInn">
							<img src="https://www.ant-pc.com/assets/2022-theme/images/gaming-sm.png" alt=""
								class="img-fluid">
							<h4 class="categoryH-box-heading">Gaming PC</h4>
							<a href="prebuiltpc.php" class="btn-comm">
								View More
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 categoryH-box aos-init aos-animate" data-aos="fade-up">
						<div class="categoryH-boxInn">
							<img src="https://www.ant-pc.com/assets/2022-theme/images/built-it-sm.png" alt=""
								class="img-fluid">
							<h4 class="categoryH-box-heading">Build it Yourself</h4>
							<a href="buildpc.php" class="btn-comm">
								View More
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- what makes start rus -->

	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="https://www.ant-pc.com/assets/2022-theme/images/Difference-pc.png" class="img-fluid"
						alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						What Makes Us Stand Out?
					</h2>
					<p>
						Since we started our journey in 2015, we’ve been striving to provide you with the ultimate
						Custom PC experience. We are a team of proficient professionals who are zealous to make all our
						valued customers happy &amp; satisfied by offering premium-quality products &amp; unmatched
						services. That’s why we are widely recognized as the most reliable Custom PC builder in India,
						specializing in building High-Performance Custom Workstation Computers, Gaming PCs, and Servers.
					</p>
					<p>
						WE NEVER SETTLE FOR LESS &amp; neither should you. We assure you that you’ll hardly find this
						level of craftsmanship &amp; customizability elsewhere. And our industry leading 3 Years
						Warranty along with Lifetime Technical Support always lets you enjoy Peak PC Performance without
						any worries.
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>

	<!-- BRing your pc home  Rus-->

	<section class="our-motto-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12 motto-content">
					<h2 class="section-heading-w">
						Bring Home
						<span>Your Dream PC Now!</span>
					</h2>
					<p>
						Have any questions or queries that you would like to ask pertaining to a new ANT PC System or
						want to upgrade the existing one? Feel free to get in touch with us by simply dropping a mail
						at: <a href="pcworldrec@gmail.com">pcworldrec@gmail.com</a> or making a phone call on: <a
							href="tel:+91 755 832 4332">+91 755 832 4332</a>!
					</p>
					<p>
						You will assuredly get the right assistance at the right time from our dedicated team who is
						always ready and available to help you out.
					</p>
					<p>
						Let Our Team Do The Work For You!!
					</p>
					<a href="about.php" class="btn-comm mt-3 aos-init aos-animate" data-aos="fade-up">Contact Us <i
							class="fas fa-arrow-right"></i></a>

				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 motto-img">
					<img src="https://www.ant-pc.com/assets/2022-theme/images/Bring-Home.jpg" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
	
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>PC <span>World</span></h3>
			

				<p class="footer-links">
					<a href="Welcome_index.php" class="link-1">Home</a>
					
					<a href="login.php">Prebuilt PC</a>
				
					<a href="login.php">Build PC</a>
				
					<a href="login.php">Components</a>
					
					<a href="about_index.php">About</a>
					
					<a href="contactus_index.php">Contact</a>
				</p>

				<p class="footer-company-name">Company Name © 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Masur Rd, Ashtavinayak Colony,</span> Vidyanagar, Karad, Maharashtra 415124</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p><a href="tel:+91 755 832 4332">+91 755 832 4332</a></p>
					<p><a href="tel:+91 940 397 7426">+91 940 397 7426</a></p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="rushikeshkumbhar151@gmail.com">rushikeshkumbhar151@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Since We Started Our Journey In 2015, We’ve Been Striving To Provide You With The Ultimate Custom PC Experience. We Are A Team Of Proficient Professionals Who Are Zealous To Make All Our Valued Customers Happy & Satisfied By Offering Premium-Quality Products & Unmatched Services. That’s Why We Are Widely Recognized As The Most Reliable Custom PC Builder In India, Specializing In Building High-Performance Custom Workstation Computers, Gaming PCs, And Servers..
				</p>

				<div class="footer-icons">

				<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>

				</div>

			</div>

		</footer>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
	</script>

</body>
</body>

</html>