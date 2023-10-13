<?php

session_start();

if (!isset($_SESSION['username'])) {
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
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<title> pc World main</title>


</head>

<body>


	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><span>PC </span>WORLD</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
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
						<a class="nav-link " id="user">Welcome <?php echo  $_SESSION['username']; ?></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- ram1 -->

	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="ram img/ram1.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						Crucial RAM 4GB DDR4 2666 MHz CL19 Desktop Memory
					</h2>
					<p>
						Brand Crucial
						Computer Memory Size 4 GB
						RAM Memory Technology DDR4
						Memory Speed 2666 MHz
						Compatible Devices Desktop
						<br><br> <b>About this item<br> 4GB, DDR4 RAM
							Memory Speed-2666MHz /PC4-21300 (2666MHz). CAS latency - 19
							ECC Type = Non-ECC, Form Factor = UDIMM, Pin Count = 288-pin, PC Speed = PC4-21300, Voltage = 1.2V, Rank and Configuration = 1Rx8
							Improve your system's responsiveness, run apps faster and multitask with ease
							Install with ease; no computer skills required How-to guides available at Crucial
							Compatibility assurance when using the Crucial System Scanner or Crucial Advisor Tool
							Crucial 10-year limited warranty
							<br>Price : Rs 1,250
							<br><br><a href="https://amzn.eu/d/4rVCeFW">Click to buy</a>
					</p>

					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- ram2 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="ram img/ram2.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						Crucial RAM 8GB DDR4 3200MHz Laptop memory
					</h2>
					<p>
						Brand Crucial
						Computer Memory Size 8 GB
						RAM Memory Technology DDR4 SDRAM
						Memory Speed 3200 MHz
						Compatible Devices Laptop
					</p>
					<p>
						About this item <br>
						Improve your system's responsiveness, run apps faster and multitask with ease. Extended timings - 22-22-22
						Install with ease; no computer skills required How-to guides available at Crucial
						Compatibility assurance when using the Crucial System Scanner or Crucial Advisor Tool
						Micron quality and reliability is backed by superior component and module level testing and 42 years of memory expertise
						ECC Type Non-ECC, Form Factor SODIMM, Pin Count 260-pin, PC Speed PC4-25600, Voltage 12V, Rank and Configuration 1Rx16, 1Rx8 or 2Rx8.NOTE: DRAM modules require configuration to specific systems
						Improve your system's responsiveness, run apps faster and multitask with ease. Extended timings - 22-22-22
						<br>Price : Rs 1,625
						<br><br><a href="https://amzn.eu/d/9jULnHX">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>

	<!-- ram3 -->

	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="ram img/ram3.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						Corsair Vengeance LPX 16GB(16*1) 3200 mhz
					</h2>
					<p>

						Brand Corsair
						Computer Memory Size 16 GB
						RAM Memory Technology DDR4
						Memory Speed 3200 MHz
						Compatible Devices Desktop
					</p>
					<p>
						About this item<br>
						TECHNICAL SPECIFICATIONS: 16 GB of size working at 3200 Mhz Speed. SPD Voltage 1.2V. SPD Speed : 2133MHz. SPD Latency 15-15-15-36
						COMPATIBLE MODELS: Intel 100 Series,Intel 200 Series,Intel 300 Series,Intel X299, Intel i7
						XMP 2.0 SUPPORT: One setting is all it takes to automatically adjust to the fastest safe speed for your VENGEANCE LPX kit.
						ALUMINUM HEAT SPREADER:The unique design of the VENGEANCE LPX heat spreader optimally pulls heat away from the ICs and into your system’s cooling path, so you can push it harder.
						LOW-PROFILE DESIGN: The small form factor makes it ideal for smaller cases or any system where internal space is at a premium.
						<br>Price : Rs 3,744
						<br><br><a href="https://amzn.eu/d/3oPRgDA">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>

	<!-- ram4 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="ram img/ram4.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						Corsair Vengeance LPX 8GB (1x8GB) DDR4 3200MHZ
					</h2>
					<p>
						Brand Corsair
						Computer Memory Size 8 GB
						RAM Memory Technology DDR4
						Memory Speed 1 MHz
						Compatible Devices Desktop
					</p>
					<p>
						About this item <br>

						XMP 2.0 SUPPORT: One setting is all it takes to automatically adjust to the fastest safe speed for your VENGEANCE LPX. Tested Voltage 1.35V
						ALUMINUM HEAT SPREADER: The unique design of the VENGEANCE LPX heat spreader optimally pulls heat away from the ICs and into your system’s cooling path, so you can push it harder.
						DESIGNED FOR HIGH-PERFORMANCE OVERCLOCKING: Each VENGEANCE LPX module is built from an custom performance PCB and highly-screened memory ICs.
						LOW-PROFILE DESIGN: The small form factor makes it ideal for smaller cases or any system where internal space is at a premium. SPD Latency 15-15-15-36
						<br>Price : 2,198
						<br><br><a href="https://amzn.eu/d/f9VEkCh">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- ram5 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="ram img/ram5.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						G.Skill Ripjaws V 8Gb (1 * 8Gb) Ddr4 3200 Mhz
					</h2>
					<p>
						Brand G.Skill
						Computer Memory Size 8 GB
						RAM Memory Technology DIMM
						Memory Speed 3200 MHz
						Compatible Devices Desktop
					</p>
					<p>
						About this item <br>
						Memory Type : DDR4 / Capacity : 8GB (8GBx1)
						Tested Speed : 3200MHz / Tested Latency : 16-18-18-38 / Tested Voltage : 1.35V
						SPD Speed : 2133MHz / SPD Voltage : 1.20V
						Multi-Channel Kit : Single Channel Kit
						<br>Price :Rs 2,006
						<br><br><a href="https://amzn.eu/d/8X8Dr21">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- ram6 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="ram img/ram5.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						G.SKILL Ripjaws V 16GB (1 * 16GB) DDR4 3200 MHz
					</h2>
					<p>
						Brand G.Skill
						Computer Memory Size 16 GB
						RAM Memory Technology DDR4
						Memory Speed 3200 MHz
						Compatible Devices Desktop

					</p>
					<p>
						Available in Various speeds and capacities
						Ripjaws Heat Spreader
						DDR4 3200 (PC4 25600) Intel Z170 Platform Desktop Memory Model F4-3200C16S-16GVK
						<br>Price : Rs 3,611
						<br><br><a href="https://amzn.eu/d/eMEHqc4">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- ram7 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="ram img/ram7.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						Kingston FURY 8GB 3200MHz DDR4
					</h2>
					<p>

						Brand Kingston FURY
						Computer Memory Size 8 GB
						RAM Memory Technology DDR4
						Memory Speed 3200 MHz
						Voltage 1.35 Volts

					</p>
					<p>
						Check out the RAM buying guide in Videos section
						Low-profile heat spreader design
						Cost-efficient, high-performance DDR4 upgrade
						Intel XMP-ready, Ready for AMD Ryzen
						Speeds up to 3733MT/s and kit capacities up to 128GB
						<br>Price :Rs 2,152
						<br><br><a href="https://amzn.eu/d/b0tQlPQ">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- ram7 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="ram img/ram8.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						ADATA XPG SPECTRIX D50 RGB 16GB (2 * 8GB) DDR4 3200MHz
					</h2>
					<p>

						Brand XPG
						Computer Memory Size 16 GB
						RAM Memory Technology DDR4
						Memory Speed 3200 MHz
						Compatible Devices Desktop
					</p>
					<p>
						DDR4 288-Pins U-DIMM Memory Kit (Fit for most Desktop PC M/B)
						Customizable RGB lighting effects with XPG RGB Sync App and compatible with most RGB software from major M/B makers
						Support Intel x299 platform and AMD X570 chipset
						Supports Intel and AMD XMP Profiles. *To run at advertised speed, please enable the Pre-set speed profile in your BIOS XMP profile section.
						Limited Lifetime warranty from XPG
						<br>Price : Rs 4,614
						<br><br><a href="https://amzn.eu/d/iyxhX3y">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- ram9 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="ram img/ram9.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						XPG ADATA GAMMIX D30 DDR4 8GB (1x8GB) 3200MHz
					</h2>
					<p>
						Brand XPG
						Computer Memory Size 8 GB
						RAM Memory Technology DDR4
						Memory Speed 3200 MHz
						Compatible Devices Desktop
					</p>
					<p>
						About this item <br>
						Do refer to the installation instruction and compatible processor support list in the image section
						GAMMIX D30 brings you excellent performance with speeds ranging from 2666MHz to 4600MHz and supports Intel X299 2666MHz and AMD AM4 / Ryzen platforms. CAS Latency : CL16-18-18
						Interface: DDR4 U-DIMM 2666-4133MHz, RAM Size: 8GB (8x16GB) DDR4
						The GAMMIX D30 features an edgy wing-shaped design that exudes a sense of power and stealth.
						Warranty: Life time warranty
						<br>Price : Rs 2,006
						<br><br><a href="https://amzn.eu/d/0z8yqln">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- ram10 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="ram img/ram10.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						ADATA XPG SPECTRIX D60G 16GB (1 * 16GB) DDR4 3200
					</h2>
					<p>
						Brand A-DATA
						Computer Memory Size 16 GB
						RAM Memory Technology DDR4
						Memory Speed 3200 MHz
						Compatible Devices Desktop


					</p>
					<p>
						About this item <br>
						ADATA XPG SPECTRIX D60G 16GB (1*16GB) DDR4 3200 MHz Desktop Memory RAM - AX4U320016G16A-ST60
						<br>Price :Rs 4,213
						<br><br><a href="https://amzn.eu/d/iuBmHCb">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>


	<!-- BRing your pc home  Rus-->
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

</body>

</html>