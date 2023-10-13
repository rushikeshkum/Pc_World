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

    <!-- storage1 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="sto img/s1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Crucial BX500 1TB 3D NAND SATA
                    </h2>
                    <p>
                        Digital storage capacity 1 TB
                        Hard Disk Interface Solid State
                        Connector Type SATA
                        Brand Crucial
                        Hard Disk Form Factor 2.5 Inches
                        Hard Disk Description Solid State Drive
                        <br><br> <b>About this item<br> 4GB, DDR4 RAM
                            Crucial BX500 1TB 3D NAND SATA is designed to Improve overall system responsiveness for all your computing needs with Crucial BX500, it delivers sequential Read and Write speeds up to 540MB/s and 500MB/s respectively.
                            With thousands of hours of Micron pre-release validation, dozens of SSD qualification test and a heritage award-winning SSD's, the crucial BX500 has been thoroughly tried, tested and proven.
                            Constructed to Boot up faster. Load files quicker. Improve overall system responsiveness for all your computing needs with Crucial BX500.Improves battery life because it’s 45x more energy efficient than a typical hard drive.
                            Our simple instructions, cloning software, and how-to videos make installation straightforward. Millions of people have upgraded with a Crucial SSD.
                            Get questions answered by our expert support team. Read SSD articles, connect with other users on our forum, or chat live with one of our specialists.
                            <br>Price : Rs 4,892
                            <br><br><a href="https://amzn.eu/d/9NiLKIY">Click to buy</a>
                    </p>

                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- storage2 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="sto img/s2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Crucial P5 Plus 500GB PCIe 4.0 3D NAND NVMe M.2 SSD
                    </h2>
                    <p>
                        Digital storage capacity 500 GB
                        Hard Disk Interface Solid State
                        Connector Type SATA
                        Brand Crucial
                        Special Feature M.2 Connectivity
                        Hard Disk Description Solid State Drive
                        Compatible Devices Laptop & Desktop
                        Installation Type Queue
                        Hard Disk Size 500 GB
                        Specific Uses For Product Multimedia

                    </p>
                    <p>
                        About this item <br>
                        PCIe 4.0 NVMe technology.
                        Engineered for hardcore gamers, professionals, and creatives who demand high-performance computing.
                        Built on our own leading Micron Advanced 3D NAND and innovative controller technology.
                        Rated at MTTF greater than 2 million hours for extended longevity and reliability.
                        5-year limited warranty or up to the max endurance rating of 300 TBW.
                        Country of Origin - Singapore
                        Sequential Read - 6600 MB/s & Sequential Write - 4000 MB/s
                        <br>Price : Rs 6,400
                        <br><br><a href="https://amzn.eu/d/3vWAx8y">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- storage3 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="sto img/s3.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Seagate Barracuda 2 TB Internal Hard Drive HDD
                    </h2>
                    <p>
                        Digital Storage Capacity 2000 GB
                        Hard Disk Interface Serial ATA
                        Connectivity Technology SATA
                        Brand Seagate
                        Special Feature Integrated Data Security
                        Hard Disk Form Factor 3.5 Inches
                        Hard Disk Description Mechanical Hard Disk
                    </p>
                    <p>
                        About this item<br>
                        Store more, compute faster, and do it confidently with the proven reliability of BarraCuda internal hard drives
                        Build a powerhouse gaming computer or desktop setup with a variety of capacities and form factors
                        The go-to SATA hard drive solution for nearly every PC application—from music to video to photo editing to PC gaming
                        Confidently rely on internal hard drive technology backed by 20 years of innovation
                        Migrate and clone data from old drives with ease using our free Seagate DiscWizard software tool
                        Enjoy long-term peace of mind with the included two-year limited warranty
                        <br>Price : Rs 4,699
                        <br><br><a href="https://amzn.eu/d/5YakkdE">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- storage4 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="sto img/s4.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Western Digital WD Green SATA 240GB
                    </h2>
                    <p>

                        Digital storage capacity 240 GB
                        Hard Disk Interface Serial ATA-600
                        Connector Type SATA
                        Brand Western Digital
                        Special Feature NAND
                        Hard Disk Form Factor 2.5 Inches
                    <p>
                        About this item <br>

                        SLC (single-level cell) caching boosts write performance to quickly perform everyday tasks.
                        Shock-resistant and WD F.I.T. Lab certified for compatibility and reliability.
                        Ultra-low power-draw so you can use your laptop for longer periods of time.
                        Available in 2.5"/7mm cased and M.2 2280 form factors to accommodate most PCs.
                        The free, downloadable Western Digital SSD Dashboard* lets you easily monitor the status of your drive. Includes a 3-year limited warranty so upgrading your storage is worry-free.
                        <br><br><a href="https://amzn.eu/d/5yllpkK">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- storage5 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="sto img/s5.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Western Digital 2TB WD Blue PC Hard Drive
                    </h2>
                    <p>
                        Brand Western Digital
                        Special Feature Backward Compatible
                        Hard Disk Form Factor 3.5 Inches
                        Hard Disk Description Mechanical Hard Disk
                        Compatible Devices PC, Gaming Console, Desktop
                        Installation Type Internal Hard Drive
                        Colour Blue
                    <p>
                        About this item <br>
                        Reliable everyday computing
                        Western Digital quality and reliability
                        Free Acronis True Image WD Edition cloning software
                        Massive capacity up to 8TB; 2-year limited warranty
                        Form Factor: 3.5-Inch
                        <br>Price :Rs 4,700
                        <br><br><a href="https://amzn.eu/d/blw2UvI">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- storage6 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="sto img/s6.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Seagate Barracuda 6 Gb/s 5400 RPM 256 MB Cache 4 TB Internal SATA Hard Drive
                    </h2>
                    <p>
                        Brand Seagate
                        Special Feature Integrated Data Security
                        Hard Disk Form Factor 3.5 Inches
                        Hard Disk Description Mechanical Hard Disk
                        Compatible Devices Laptop, Desktop
                        Colour Silver
                        Hard Disk Size 4 TB

                    </p>
                    <p>
                        Country Of Origin:Thailand and China, Trusted Dependability.Wattage : ‎125
                        Cost-effective storage upgrade for laptop or desktop computers – store all of your games, music, movies and more
                        SATA 6Gb/s interface optimizes burst performance. Seagate Secure models for hardware-based data security
                        Best-fit applications: Desktop or all-in-one PCs, home servers, entry-level direct-attached storage devices (DAS)
                        Instant Secure Erase allows safe and easy drive retirement, plus protect data with Self-Encrypting Drive (SED) models
                        2 year Limited Manufacturer Warranty; Customer care number: 0008004401392
                        For performance-related issues in Seagate Internal SSD/ Internal HDD, contact Seagate Customer Care Toll free# 0008004401392 In case you are not satisfied the resolution provided the brand
                        <br>Price : Rs 8,499
                        <br><br><a href="https://amzn.eu/d/0l55Lwt">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- storage7 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="sto img/s7.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Western Digital WD Purple 2TB SATA Internal Surveillance Hard Drive
                    </h2>
                    <p>

                        Brand Western Digital
                        Special Feature Multitasking
                        Hard Disk Form Factor 3.5 Inches
                        Compatible Devices Camera
                        Colour Purple
                        Hard Disk Size 2 TB
                        Hard Disk Rotational Speed 5400 RPM

                    </p>
                    <p>
                        Engineered specifically for surveillance security systems;Supports up to 180 TB per year work load rate
                        Prioritized write-operations for maximized surveillance performance;Support for more than eight bays
                        Tuned for write-intensive, low bit-rate, high stream-count applications typical to most surveillance applications;TLER and ATA streaming support
                        Tarnish-resistant components; This internal hard disk is meant for security and surveillance purposes only and not meant to be used in computers
                        Specific Uses For Product: Business
                        <br>Price :Rs 4,899
                        <br><br><a href="https://amzn.eu/d/fBThIuP">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- storage8 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="sto img/s8.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        XPG ADATA GAMMIX S11 Pro 256GB PCIe Gen3x4 M.2 2280 Gaming Solid State Drive
                    </h2>
                    <p>
                        Brand XPG
                        Hard Disk Description Solid State Hard Drive
                        Compatible Devices Desktop
                        Colour Black
                        Hard Disk Size 256 GB
                        Specific Uses For Product Gaming
                        Included Components 1 SSD Drive
                    </p>
                    <p>
                        Check out the buying guide in videos section
                        Breakthrough Performance: It has PCIe Gen3x4 interface with Read speed up-to 3500 MB/S & write Speed up-to 1200 MB/s. A Next-generation 3D NAND Flash with Higher capacity, durability, and power efficiency and NVMe 1.3 supported.
                        Built for pros: The SSD is designed Ideal for gamers, PC enthusiasts, over-clockers, and video rendering professionals with M.2 2280 form factor which supports desktops with the latest Intel and AMD platforms.
                        3D NAND FLASH Higher Capacities for More Games: Implementing advanced 3D NAND Flash, S11 Pro features higher storage capacities of up to 1TB, while also providing higher efficiency, rugged reliability and a high TBW (Total Bytes Written).
                        <br>Price : Rs 3,596
                        <br><br><a href="https://amzn.eu/d/iKWvLo3">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Storage 9 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="sto img/s9.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Samsung 980 500GB Up to 3,500 MB/s PCIe 3.0 NVMe M.2
                    </h2>
                    <p>

                        Digital storage capacity 500 GB
                        Hard Disk Interface Solid State
                        Connector Type SATA
                        Brand Samsung
                        Special Feature Multitasking
                        Hard Disk Description Solid State Hard Drive
                    </p>
                    <p>
                        About this item <br>
                        Sequential Read speeds up to 3,500MB/s. Performance varies based on system hardware and configuration
                        Interface : PCIe 3.0 NVMe (PCIe Gen 3.0 x 4). Sequential writes up to 3000 MB/s. Samsung Pablo Controller
                        Form Factor : M.2 (2280)
                        5-Year Limited Warranty or 300 TBW Limited Warranty. Contact :1800 30 7267864
                        Designed for gamers, Mainstream PC users, Value maximizers. Form Factor : M.2 (2280),Designed for gamers, Mainstream PC users, Value maximizers.
                        Country Of Origin: Republic of Korea, China.(Originated from one of these countries)
                        Manufacturer 1 : Samsung (China) Semiconductor Co. Ltd.,#1999 North Xiaohe Rd. Xi'an, Shaanxi Province, 710100 China Manufacturer 2: Samsung Electronics Co., Ltd. Semiconductor Business Test & Package Center, #158 Baebang-Ro Baebang-Eup, Asan-city Chungcheongnam-Do, 31489 Republic of Korea
                        <br>Price : Rs 4,649
                        <br><br><a href="https://amzn.eu/d/bvw1pAA">Click to buy</a>
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
                    <img src="sto img/s10.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Crucial P3 2TB PCIe 3.0 3D NAND NVMe M.2 SSD
                    </h2>
                    <p>Digital storage capacity 2 TB
                        Hard Disk Interface Solid State
                        Connector Type SATA
                        Brand Crucial
                        Special Feature Launching with Micron 176-layer NAND5
                        Hard Disk Form Factor 2.5 Inches
                        Hard Disk Description Solid State Drive
                        Compatible Devices Desktop
                        Colour Black
                        Hard Disk Size 2 TB
                    </p>
                    <p>
                        About this item <br>
                        Impressive read/ write speeds up to 3500/3000MB/s
                        Spacious storage up to 4TB
                        Solid Gen3 performance. Micron Advanced 3D NAND. NVMe PCIe 3.0 M.2 (2280).
                        Performs up to 45% better than the previous generation⁴
                        Dynamic write acceleration. Multistep data integrity algorithm.
                        <br>Price :Rs 14,799
                        <br><br><a href="https://amzn.eu/d/1qU83f3">Click to buy</a>
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