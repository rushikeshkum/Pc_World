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

    <!-- p1 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="proc img/p1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Intel Core E8500 3.16 GHz Processor
                    </h2>
                    <p>
                        Brand In tel
                        CPU Manufacturer Intel
                        CPU Speed 3.16 GHz
                        Secondary Cache 6 MB
                        Processor Count 2
                        <br><br> <b>About this item<br>
                            No batteries are required
                            CPU speed: 3.16 GHz
                            Product type: Processor
                            <br>Price : Rs 750
                            <br><br><a href="https://amzn.eu/d/8G05f7y">Click to buy</a>
                    </p>

                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- p2 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="proc img/p2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Intel Core i5-10400F 10th Generation Processor
                    </h2>
                    <p>

                        Brand Intel
                        CPU Manufacturer Intel
                        CPU Model Core_m
                        CPU Speed 2.9 GHz
                        CPU Socket LGA1200
                    </p>
                    <p>
                        About this item <br>
                        Processor- i5 -10400F , BX8070110400F
                        Intel Core i5-10400F Processor (12M Cache, up to 4.30 GHz)10th Generation Intel Core i5 ProcessorsProducts formerly Comet LakeDesktopLithography14 nmProcessor Base Frequency2.90 GHzSockets SupportedFCLGA1200
                        Intel Core i5-10400F Processor (12M Cache, up to 4.30 GHz)
                        Compatible chipsets : Intel Q470 Chipset, Intel Z490 Chipset, Intel H470 Chipset, Intel B460 Chipset, Intel H410 Chipset
                        Intel Core i5-10400F Processor (12M Cache, up to 4.30 GHz)10th Generation Intel Core i5 ProcessorsProducts formerly Comet LakeDesktopLithography14 nmProcessor Base Frequency2.90 GHzSockets SupportedFC LGA 1200+
                        +Compatible chipsets : Intel Q470 Chipset, Intel Z490 Chipset, Intel H470 Chipset, Intel B460 Chipset, Intel H410 Chipset+
                        +Processor- i5 -10400F ,+
                        +Intel Core i5-10400F Processor (12M Cache, up to 4.30 GHz)
                        <br>Price : Rs 8,999
                        <br><br><a href="https://amzn.eu/d/d07qQt2">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- p3 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="proc img/p3.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Intel Core i3-10100F 10th Generation LGA1200
                    </h2>
                    <p>


                        Brand AMD
                        CPU Manufacturer AMD
                        CPU Model Ryzen 3 3200G
                        CPU Socket Socket AM4
                        Platform Windows 10
                    </p>
                    <p>
                        About this item<br>
                        4 Cores & 4 Threads
                        Base Clock: 3.6GHz, Max Boost Clock: up to 4GHz, 6MB Cache, TDP: 65W
                        System Memory Specification: 2933MHz, System Memory Type: DDR4, Memory Channels: 2
                        Socket: AM4, Motherboard Compatibility: AMD 300, 400,serles chipset based motherboards
                        Graphics: AMD Radeon Vega 8 Graphics, Heatsink Fan: Wraith Stealth, Warranty: 3 Years
                        3 Years Brand Warranty.
                        For all performance-related issues in: AMD Processor: Please reach out via AMD brand home page > Drivers & Support > Customer Support (Technical & Warranty help) > Contact Support > Online Service Request In case you are not satisfied the resolution provided by the above brands, please reach back to Amazon Customer service for next steps.
                        <br>Price : Rs 7,999
                        <br><br><a href="https://amzn.eu/d/7vPIqRv">Click to buy</a>
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
                    <img src="proc img/p4.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Intel Core i3-10100F 10th Generation LGA1200
                    </h2>
                    <p>
                        Brand Intel
                        CPU Manufacturer Intel
                        CPU Model Core i3-10100F
                        CPU Speed 4.3 GHz
                        CPU Socket LGA1200
                    </p>
                    <p>
                        About this item <br>

                        Introducing the 10th Gen Intel Core i3 desktop processor, this processor comes in 14 nm, supports LGA 1200 socket and features 4 Core which allow the processor to run multiple programs simultaneously without slowing down the system. While the 8 threads allow instructions to be handled by a single CPU core alomg with Hyper Threading Technology.
                        Programmed with 3.60GHz Base frequency, the Intel Turbo Boost 2.0 technology cranks maximum turbo frequency up to blazing 4.30 GHz. The processor is desirable for a gamer looking for a fantastic in-game experience and a creator that is ready to do more creating and sharing alike.
                        All this paired with 6MB of Intel Smart Cache. It has a TDP rating of 65W with max memory size of 128GB dual-channel DDR4 support for up-to 2666Mhz with Intel top notch security features.
                        Designed with Intel Optane memory, that can dramatically improve boot times and accelerate system performance in desktop PCs and laptops. It streamlines your computing experience by combining storage capacity and intelligent system acceleration.
                        The processor extends all the capabilities that users love from previous generation CPUs with even more advanced innovations that deliver exciting new levels of performance when paired with the right graphics card. <br>Price : Rs 6,639
                        <br><br><a href="https://amzn.eu/d/hVEh6kQ">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- p5 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="proc img/p5.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        AMD 5000 Series Ryzen 5 5600X Desktop Processor
                    </h2>
                    <p>
                        Brand AMD
                        CPU Manufacturer AMD
                        CPU Model Ryzen 5
                        CPU Speed 3.7 GHz
                        CPU Socket Socket AM4
                    </p>
                    <p>
                        About this item <br>
                        6 Cores & 12 Threads, 35 MB Cache
                        Base Clock: 3.7 GHz, Max Boost Clock: up to 4.6 GHz. Max. Operating Temperature (Tjmax) 95°C
                        Memory Support: DDR4 3200MHz, Memory Channels: 2, TDP: 65W, PCI Express Generation : PCIe Gen 4
                        Compatible with Motherboards based on 500 Series Chipset, Socket AM4
                        Separate Graphic Card Required, Included Heatsink Fan: Wraith Stealth
                        3 Years Brand Warranty. For Technical Support : Please Contact : Tel: +91-80-67030050 (Mon-Fri: 09:00 - 17:00 IST); Expect Delayed Response due to ongoing COVID Crisis
                        <br>Price :Rs 17,399
                        <br><br><a href="https://amzn.eu/d/6NQzfo5">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- p6 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="proc img/p6.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        AMD Ryzen 7 3700X Desktop Processor
                    </h2>
                    <p>

                        Brand AMD
                        CPU Manufacturer AMD
                        CPU Model Ryzen 7 3700X
                        CPU Speed 3.6 GHz
                        CPU Socket Socket AM4
                    </p>
                    <p>
                        8 Cores & 16 Threads. Max Temps : 95°C
                        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2
                        Socket: AM4, Motherboard Compatibility: AMD 300, 400, 500 serles chipset based motherboards
                        Graphics: Separate Graphics Card is required, Heatsink Fan: Wraith PRISM with RGB LED, Warranty: 3 Years
                        <br>Price : Rs 29,999
                        <br><br><a href="https://amzn.eu/d/9Mca8VH">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- p7 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="proc img/p7.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Intel Core i5-10th Gen Processor (i5-10600K
                    </h2>
                    <p>


                        Brand Intel
                        CPU Manufacturer Intel
                        CPU Model Core_m
                        CPU Speed 4.1 GHz
                        Platform Windows 10

                    </p>
                    <p>
                        Intel Core i5-10600K Processor (12M Cache, up to 4.80 GHz)10th Generation Intel Core i5 ProcessorsProducts formerly Comet LakeDesktopLithography14 nmProcessor Base Frequency4.10 GHzConfigurable TDP-down95 WIntel UHD Graphics 630350 MHz+
                        +Intel Core i5-10600K Processor (12M Cache, up to 4.80 GHz)+
                        +I5-10600K
                        <br>Price :Rs 29,851
                        <br><br><a href="https://amzn.eu/d/3JvWyTQ">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- p8 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="proc img/p8.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Intel Core I5 12400F 12 Gen Generation Desktop Pc Processor
                    </h2>
                    <p>

                        Brand Intel
                        CPU Socket LGA1700
                        Compatible Devices Personal Computer
                        RAM Memory Technology DDR4
                        Memory Clock Speed 2.5 GHz
                    </p>
                    <p>
                        Intel Core i5 12400F is a 12th Generation Alder lake Processor with 18MB Cache Memory. The 12400F has Total 6 Cores (6 Performance Cores) and 12 Threads. This is the Best processor CPU so Far released by Intel in I5 Range.
                        ðŸ Intel Core i5 12400F supports latest LGA1700 Socket. Some of the supported Motherboards are Z690, B660, H670, H610
                        Intel Core i5 12400F Comes with 3 Years of warranty directly from Intel Brand.
                        Both DDR5 RAM upto 4800 Mhz and DDR4 RAM upto 3200 Mhz are supported according to specific motherboard compatibility
                        ¨Intel Core i5 12400F uses base power of 65W and maximum power consumption of 180W.
                        <br>Price : Rs 15,349
                        <br><br><a href="https://amzn.eu/d/cW4dMOR">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- p9 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="proc img/p9.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Intel Core i7 12700 12th Gen Generation Desktop PC Processor
                    </h2>
                    <p>

                        Brand Intel
                        CPU Manufacturer Intel
                        CPU Model Core i7 4800MQ
                        CPU Speed 4.9 GHz
                        CPU Socket LGA1700
                    <p>
                        About this item <br>
                        Intel Core i7 12700 is a 12th Generation Alder lake Processor with 25MB Cache Memory. The 12700 has Total 12 Cores (8 Performance Cores and 4 Efficient Cores) and 20 Threads. This is the Best processor CPU so Far released by Intel in I7 Range. It is an APU so you donot need a Graphic card necessarily.
                        🆕Intel Core i7 12700 12th Generation Desktop Processor supports latest LGA1700 Socket. Some of the supported Motherboards are Z690, B660, H670, H610. Intel Core i7 12700 uses base power of 65W and maximum power consumption of 180W. it comes with a stock fan inside the box for cooling for normal workloads.
                        <br>Price : Rs 31,193
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
                    <img src="proc img/p10.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Intel Core i9-12900K Desktop Processor
                    </h2>
                    <p>
                        Brand Intel
                        CPU Manufacturer Intel
                        CPU Model Core i9-12900K
                        CPU Speed 5.2 GHz
                        CPU Socket LGA 1700


                    </p>
                    <p>
                        About this item <br>
                        Intel 7 Architecture enables improved performance per watt and micro architecture makes it power-efficient
                        30 MB of L3 cache memory provides excellent hit rate in short access time enabling improved system performance
                        The processor features Socket LGA-1700 socket for installation on the PCB
                        10 nm enables improved performance per watt and micro architecture makes it power-efficient
                        <br>Price :Rs 48,959
                        <br><br><a href="https://amzn.eu/d/gCYesQn">Click to buy</a>
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