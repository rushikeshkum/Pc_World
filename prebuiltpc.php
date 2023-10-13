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

  <!-- banner -->


  <div id="banner">
    <div id="banner-images">
      <img src="https://smcinternational.in/extra/images/SMC%20Banner.jpg" alt="" />
      <img src="https://promotions.newegg.com/FlagShip/ABS/img/hero2.jpg" alt="" />
      <img
        src="https://www.cpuagent.com/static/articles/gaming-pcs.png"
        alt="" />
      <img src="https://www.cyberpowerpc.com/template/2022/page/HyperLiquid2/images/c1.png" alt="" />
      <img src="https://geekawhat.com/wp-content/uploads/2022/09/Feature-2-1250x700.jpg" alt="" />
    </div>
    <h1></h1>
  </div>
  <!-- banner -->

  <section class="products-list-sec series-list-sec">
    <div class="container-fluid container-fluid-cust">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 products-listInn">
          <div class="row">


            <!-- Box starts -->

            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/9Av6kZR">Electrobot Gaming Tower PC</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/9Av6kZR">
                    <img src="prebuilt pc img/box1.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>BUDGET GAMING</h5>
                  <p>Enjoy all your favourite latest games without breaking the bank. gaming animating </p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  78,999
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/9Av6kZR" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/7snsKOM">Lenovo Legion 5 Gaming PC</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/7snsKOM">
                    <img src="prebuilt pc img/PB2.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>ENTHUSIAST GAMING</h5>
                  <p>AMD Ryzen 7 5800/16GB/512GB SSD/2TB HDD/Win11/NVIDIA RTX 3070 8GB GDDR6</p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  1,49,990
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/7snsKOM" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->


            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/acQHbUe">Electrobot DOS Gaming Tower PC</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/acQHbUe">
                    <img src="prebuilt pc img/PB3.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>BUDGET GAMING</h5>
                  <p>AMD Ryzen 5 5600X/Nvidia RTX 3060TI 8GB/16GB RAM/1TB HDD/240GB SSD with 4 RGB Cooling Fans with
                    Controller</p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  85,499
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/acQHbUe" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/0oWT3ga">ASUS ROG Strix G10DK Gaming</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/0oWT3ga">
                    <img src="prebuilt pc img/PB4.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>Budget Gaming</h5>
                  <p>AMD Ryzen 5 3600X /8GB/1TB HDD + 256GB SSD/4GB NVIDIA GeForce GTX 1650 Graphics/Windows 11</p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  46,990
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/0oWT3ga" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/4mHQrY5">CHIST Gaming <br>PC</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/4mHQrY5">
                    <img src="prebuilt pc img/PB5.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>Budget Gaming</h5>
                  <p>Intel Core i5-10400F /H510 Motherboard /256GB SSD/1TB HDD/GT 730 4GB DDR5 Graphic Card/8GB RAM.</p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  43,800
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/4mHQrY5" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->
            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/gxMa6uf">Electrobot Airflow Gaming Tower PC</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/gxMa6uf">
                    <img src="prebuilt pc img/pb6final.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>Gaming/Streaming</h5>
                  <p>AMD Ryzen 5 5600X/Ram 16GB 3200MHz DDR4 /RTX 3060 12GB GDDR6/SSD 500GB Nvme</p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  85,999
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/gxMa6uf" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends --><!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/hW0ecUk">CHIST I7 Extreme Gaming PC</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/hW0ecUk">
                    <img src="prebuilt pc img/PB7.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>Budget Gaming</h5>
                  <p>Intel i7 6700 Processor/Ram 32Gb/512GB SSD/1TB HDD/GT 730 DDR5 Graphic Card/Windows 11</p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  42,900
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/hW0ecUk" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/4uxNINR">Kuro Gaming <br>PC </a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/4uxNINR">
                    <img src="prebuilt pc img/pb8-removebg-preview.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>STREAMING</h5>
                  <p>Intel 12th Gen i9 (Alder Lake - 16C/20T)/32GB DDR4 RAM/1TB SSD/GeForce RTX 3070 8GB Graphics/
                  </p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  2,09,950
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/4uxNINR" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/66mYKzN">Electrobot Fierce-Griffin Gaming PC</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/66mYKzN">
                    <img src="prebuilt pc img/pb9.png " alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>STREAMING</h5>
                  <p>Intel Core i9 12900K/Z690 Chipset/RTX 3070 8GB GDDR6/Ram 32GB (16x2) 3600MHz DDR4/1TB Gen4 Nvme
                    SSD/1TB HDD
                  </p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  1,74,999
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/66mYKzN" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/bT0Ce6M">CHIST Gaming <br> PC</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/bT0Ce6M">
                    <img src="prebuilt pc img/pb10.png " alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>Budget Series</h5>
                  <p>Intel i7 2600Processor 4Core 8 Threats/256GB NVME SSD 1TB HDD/DDR3 8GB RAM/GT 730 4GB Graphic
                    Card/Windows 10 Pro
                  </p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  25,500
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/bT0Ce6M" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/f40JV9D">ASUS ROG Strix GT15<br> PC</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/f40JV9D">
                    <img src="prebuilt pc img/pb11.png " alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>Multitasking</h5>
                  <p>Intel i5-10400F Gaming Desktop/8GB RAM/1TB HDD + 256GB SSD/Windows 10/4GB NVIDIA GeForce GTX 1650
                    Super Graphics
                  </p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  89,990
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/f40JV9D" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a href="https://amzn.eu/d/0sRTaF7">CHIST Gaming <br>pc</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a href="https://amzn.eu/d/0sRTaF7">
                    <img src="prebuilt pc img/pb12.png " alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>Budeget series</h5>
                  <p>Intel Core i5 3470 Processor/Windows/ H61Motherboard/GT 730 4GB DDR5 Graphic Card/8GB RAM/256GB
                    SSD/1TB Hard Disk 7200RPM
                  </p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  26,500
                </div>
                <div class="pList-btn">
                  <a href="https://amzn.eu/d/0sRTaF7" class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a
                      href="https://dl.flipkart.com/s/grZm6puuuN">ASUS
                      Ryzen 7 5800X <br>pc</a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a
                    href="https://dl.flipkart.com/s/grZm6puuuN">
                    <img src="prebuilt pc img/pb13.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>GAMING/STREAMING</h5>
                  <p>AMD ryzen 7 5900x/16 GB RAM/NVIDIA GeForce RTX 3070 Graphics/1 TB Hard Disk/1 TB SSD
                    Capacity/Windows 10 Home (64-bit)/8 GB Graphics Memory)
                  </p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  1,59,990
                </div>
                <div class="pList-btn">
                  <a href="https://dl.flipkart.com/s/grZm6puuuN"
                    class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

             <!-- Box starts -->
             <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a
                      href="https://dl.flipkart.com/s/gMHptpuuuN">ANT Gaming <br>PC 
                       <br></a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a
                    href="https://dl.flipkart.com/s/gMHptpuuuN">
                    <img src="prebuilt pc img/pb14.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>GAMING/STREAMING</h5>
                  <p>Intel i5 12400F/8 GB RAM/Nvidia GTX 1650 4GB Graphics/256 GB SSD Capacity/Windows 10 (64-bit)/4 GB Graphics Memory)Gaming Tower
                    
                  </p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  55,990
                </div>
                <div class="pList-btn">
                  <a href="https://dl.flipkart.com/s/gMHptpuuuN"
                    class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a
                      href="https://dl.flipkart.com/s/g7Ap4UuuuN">NXTGN Gaming  <br>PC 
                       <br></a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a
                    href="https://dl.flipkart.com/s/g7Ap4UuuuN">
                    <img src="prebuilt pc img/pb15.png" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="pList-box-points">
                  <h5>GAMING/STREAMING</h5>
                  <p>Intel i3 11th Generation Desktop PC/16 GB RAM/Nvidia 4GB Graphic Card / 128GB SSD /1 TB Hard Disk/Windows 10 Pro 
                    
                  </p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  44,990
                </div>
                <div class="pList-btn">
                  <a href="https://dl.flipkart.com/s/g7Ap4UuuuN"
                    class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

            <!-- Box starts -->
            <div class="col-lg-3 col-md-3 col-sm-12 aos-init aos-animate" data-aos="fade-up">
              <div class="products-list-box">
                <div class="pList-box-heading">
                  <h3>
                    <a
                      href="https://dl.flipkart.com/s/tliYCkNNNN">ZOONIS Intel i7<br>PC 
                       <br></a>
                  </h3>
                </div>
                <div class="pList-box-img">
                  <a
                    href="https://dl.flipkart.com/s/tliYCkNNNN">
                    <img src="prebuilt pc img/pb16.png" alt="" class="img-fluid">
                  </a>
                </div> 
                <div class="pList-box-points">
                  <h5>Budget Gaming</h5>
                  <p>Intel i7 4200/16 GB RAM/4GB RADEON RX 550 Graphics /1 TB Hard Disk/120 GB SSD Capacity/Windows 10 Mid Tower Case
                    
                  </p>
                </div>
                <div class="pList-box-price">
                  <span><small></small></span>
                  <i class="fas fa-rupee-sign"></i>
                  34,999
                </div>
                <div class="pList-btn">
                  <a href="https://dl.flipkart.com/s/tliYCkNNNN"
                    class="btn-comm btn-block">BUY NOW</a>
                </div>
              </div>
            </div>
            <!-- Box ends -->

          </div>
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