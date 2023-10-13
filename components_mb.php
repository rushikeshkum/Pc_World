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

	<!-- mb1 -->

	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="mb img/mb1.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						Ant Value Motherboard
					</h2>
					<p>
						Ant Value H61MAD3-N Gaming mATX Motherboard LGA1155 Intel 2nd and 3rd Generation i3/i5/i7 DDR3,
						M.2 NVMe, USB 2.0 Ports
						<br><br> <b>About this item<br> Supports 2nd/ 3rd Gen Intel Core / Pentium/ Celeron processors
							for LGA 1155 socket. Chipset: Intel H61 Chipset, mATX
							Supports DDR3 RAM, Clockspeed up to 1333 MHz, Slots: 2
							1xM.2 slot (Key M), 4 x SATA III ports and support up to PCIe 3.0x4 and SATA 6Gb/s
							1 x VGA and 1 x HDMI port
							6 x USB 2.0 Ports and 4 x SATA Ports
							<br>Price : Rs 3,234
							<br><br><a href="https://amzn.eu/d/6BjbpVV">Click to buy</a>
					</p>

					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- mb2 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="mb img/mb2.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						MSI A320M-A PRO AMD PCIe 3.0 DDR4 m-ATX Motherboard
					</h2>
					<p>

						Brand MSI
						CPU Socket Socket AM4
						Compatible Devices Personal Computer
						RAM Memory Technology DDR4
						Compatible Processors AMD 3rd Generation Ryzen
					</p>
					<p>
						About this item <br>
						Supports 1st, 2nd and 3rd Gen AMD Ryzen for Socket AM4
						Audio Boost: Reward your ears with studio grade sound quality.
						Supports DDR4 Memory, up to 3200 (OC) MHz
						DDR4 Boost: Advanced technology to deliver pure data signals for the best performance and
						stability
						Core Boost: With premium layout and fully digital power design to support more cores and provide
						better performance
						<br>Price : 5,820
						<br><br><a href="https://amzn.eu/d/c1tyzKm">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- mb3 -->
	<!-- mb2 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="mb img/mb3.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						ASUS Prime H510M-Emicroatx Motherboard Lga1200 for 11Th & 10Th Gen Processor Ddr4
					</h2>
					<p>

						Size: PRIME-H510M-E
						Brand ASUS
						CPU Socket LGA 1200
						Compatible Devices Personal Computer
						RAM Memory Technology DDR4
						Compatible Processors 10th Generation Intel Core
					</p>
					<p>
						About this item<br>
						The ASUS Prime H510M-E motherboard is designed to support latest Intel Socket LGA1200 for 11th
						Gen Intel Core processors & 10th Gen Intel Core. The board is PCIe 4.0 Ready supporting up to
						64GB DDR4 3200MHz(OC) of memory and Intel Turbo Boost Technology to push your experience to its
						peak.
						The board features the most comprehensive cooling options ever that are configurable via Fan
						Xpert 2+ or the UEFI BIOS. It employs stronger PCH heatsink. These comprehensive cooling options
						are controllable and configurable via Fan Xpert 2+ software.
						<br>Price : 6,545
						<br><br><a href="https://amzn.eu/d/17pYf4w">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- mb4 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="mb img/mb4.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						GIGABYTE H410M H Ultra Durable Motherboard
					</h2>
					<p>


						Brand GIGABYTE
						CPU Socket LGA 1200
						Compatible Devices Personal Computer
						RAM Memory Technology DDR4
						Compatible Processors 10th Generation Intel Core
					</p>
					<p>
						About this item <br>

						GIGABYTE Exclusive 8118 Gaming LAN with Bandwidth Management
						Dual Channel Non-ECC Unbuffered DDR4, 2 DIMMs
						Supports 10th Gen Intel Core Processors
						8-Channel HD Audio with Audio Capacitors
						Graphics Card Interface: Pci E
						<br>Price : 6,375
						<br><br><a href="https://amzn.eu/d/hCMFW6L">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- mb5 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="mb img/mb5.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						ASUS Prime B550M-A WiFi AMD AM4
					</h2>
					<p>
						Gen Ryzen Micro ATX Motherboard (PCIe 4.0, WiFi 6, ECC Memory, 1Gb
						LAN, HDMI 2.1/D-Sub, 4K@60HZ, Addressable Gen 2 RGB Header and Aura Sync.
						Brand ASUS
						CPU Socket Socket AM4
						Compatible Devices Personal Computer
						Compatible Processors AMD 3rd Generation Ryzen
						Chipset Type AMD B550
					</p>
					<p>
						About this item <br>
						AMD AM4 Socket and PCIe 4. 0: The perfect pairing for 3rd Gen AMD Ryzen CPUs; Ultrafast
						Connectivity: 1x PCIe 4. 0 x16 SafeSlot, WiFi 6 (802. 11ax), 1Gb LAN, dual M. 2 slots (NVMe
						SSD)—one with PCIe 4. 0 x4 connectivity, USB 3. 2 Gen 2 Type-A , HDMI 2. 1 (4K@60HZ), D-Sub &
						DVI
						Comprehensive Cooling: VRM heatsink, chipset heatsink, hybrid fan headers and Fan Xpert 2
						utility
						Boosted Memory Performance: ASUS OptiMem proprietary trace layout allows memory kits to operate
						at higher frequencies with lower voltages to maximize system performance.
						Graphics Card Interface: Pci E
						<br>Price : 13,350
						<br><br><a href="https://amzn.eu/d/apnrNDF">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- mb6 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="mb img/mb6.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						GIGABYTE H510M H Ultra Durable MicroATX Motherboard LGA 1200 DDR4 DIMM
					</h2>
					<p>
						Brand GIGABYTE
						CPU Socket LGA 1200
						Compatible Devices 11th and 10th Gen Intel Core Series Processors
						RAM Memory Technology DDR4
						Compatible Processors 11th

					</p>
					<p>
						GIGABYTE APP Center, Simple and Easy Use
						GIGABYTE Exclusive 8118 Gaming LAN with Bandwidth Management
						Supports 11th and 10th Gen Intel Core Series Processors
						Dual Channel Non-ECC Unbuffered DDR4, 2 DIMMs
						Ultra-Fast M.2 with PCIe Gen3 X4 & SATA Interface
						High Quality Audio Capacitors and Audio Noise
						<br>Price : 6,950
						<br><br><a href="https://amzn.eu/d/09tbxH5">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- mb7 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="mb img/mb7.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						Ant Value G41MAD3 Gaming mATX Motherboard LGA775
					</h2>
					<p>

						Brand Ant Value
						CPU Socket LGA 775
						Compatible Devices Personal Computer
						RAM Memory Technology DDR3
						Compatible Processors Intel Core 2 Quad, Intel Core 2 DUO


					</p>
					<p>
						Supports 2nd Gen Intel Core 2 Quad/Core 2 processors for LGA 775 socket. Chipset: Intel G41
						Chipset, mATX
						Supports DDR3 RAM, Clockspeed up to 1333 MHz, Slots: 2
						4 x SATA II ports and support up to SATA 3Gb/s
						1 x VGA port
						6 x USB 2.0 Ports and 4 x SATA Ports
						Customer Support Email ID - support@acrorma.com<br>Price : 2,288
						<br><br><a href="https://amzn.eu/d/cJZ3N69">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- mb8 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="mb img/mb8.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						Gigabyte B450M DS3H AMD RyzenMicro ATX/Motherboard
					</h2>
					<p>
						Brand GIGABYTE
						CPU Socket Socket AM4
						Compatible Devices Personal Computer, CPU
						RAM Memory Technology DDR4
						Compatible Processors AMD 2nd Gerenration Ryzen, AMD 1st Gerenration Ryzen
					</p>
					<p>
						Supports AMD 1st and 2nd generation Ryzen/ Ryzen with Radeon Vega graphics processors.iTE I/O
						Controller Chip
						Dual channel non-ECC unbuffered DDR4, 4 DIMMs
						HDMI, DVI D ports for multiple display
						PCIe Gen3 M.2 NVMe
						High quality audio capacitors and audio noise guard
						RGB fusion supports RGB LED strips in 7 colors
						Realtek Gigabit LAN
						<br>Price : Rs 8,250
						<br><br><a href="https://amzn.eu/d/2G1tHzg">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- mb9 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="mb img/mb9.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						MSI PRO H610M-E DDR4 Motherboard, Micro-ATX
					</h2>
					<p>

						Brand MSI
						CPU Socket LGA 1700
						Compatible Devices Personal Computer
						RAM Memory Technology DDR4
						Memory Clock Speed 3200 MHz
					</p>
					<p>
						About this item <br>
						12TH GEN CORE READY - The PRO H610M-E DDR4 is a compact micro-ATX motherboard outfitted with the
						latest Intel H610 chipset (LGA 1700, 12th Gen Core ready); The VRM features MSI Core Boost
						technology for improved stability & peformance
						GEN4 GPU SLOT, DUAL DIMMS - A PCIe 4.0 x16 slot (with steel frame) supports state-of-the-art
						graphics cards; Dual DIMM’s with dual-channel DDR4 architecture support up to 64 GB of SDRAM
						(3200MHz)
						GEN3 M.2 SSD STORAGE - The M.2 Gen3 x4 32Gb/s slot is designed to maximize NVMe based SSD
						performance; SSD storage reduces loading time
						PASSIVE & AI COOLING - A chipset heatsink provides passive cooling; a PCB base with thickened
						copper helps dissipate heat; Frozr AI cooling automatically adjusts system fan settings based on
						CPU & GPU temperatures
						<br>Price : 7,300
						<br><br><a href="https://amzn.eu/d/htysF6P">Click to buy</a>
					</p>
					<!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- mb10 -->
	<section class="why-choose-sec">
		<div class="container-fluid container-fluid-cust">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
					<img src="mb img/mb10.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 choose-content">
					<h2 class="section-heading-w">
						MSI B450 Gaming Plus MAXATX Gaming Motherboard
					</h2>
					<p>
						Brand MSI
						CPU Socket Socket AM4
						Compatible Devices Gaming Console
						RAM Memory Technology DDR4
						Compatible Processors AMD Ryzen 2nd Generation, AMD Ryzen 1st Generation, AMD Ryzen 3rd
						Generation


					</p>
					<p>
						About this item <br>
						Supports DDR4 Memory, up to 4133(OC) MHz; Lightning Fast Game experience: TURBO M.2, AMD Turbo
						USB 3.2 GEN2, StoreMI Technology
						Core Boost: With premium layout and fully digital power design to support more cores and provide
						better performance
						DDR4 Boost: Advanced technology to deliver pure data signals for the best gaming performance and
						stabilityÂ
						Audio Boost: Reward your ears with studio grade sound quality for the most immersive gaming
						experience
						Graphics Card Interface: Pci E
						<br>Price : 10,195
						<br><br><a href="https://amzn.eu/d/3Lm9hN8">Click to buy</a>
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