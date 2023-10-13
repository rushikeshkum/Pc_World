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

    <!-- cc1 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="cpu img/cp1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Ant Esports ICE-C612 with RGB CPU Cooler
                    </h2>
                    <p>
                        Brand Ant Esports
                        Cooling Method Air
                        Compatible Devices Desktop
                        Noise Level 37 dB
                        Material Aluminium
                        <br><br> <b>About this item<br>
                            Direct Contact Technology: 4 heatpipes with Direct Contact Technology eﬀectively provide excellent heat dissipation.
                            PWM Silent Fan: Automatically controls the fan speed according to the temperature of CPU eﬃciently and decreases fan noise.
                            Rainbow Illumination: With a vision of revolutionizing a whole new frontier of cooling performance, we introduce Ant Esports ICE-C612 with Rainbow LED PWM Fan to give you an absolute visual treat.
                            Optimized Fin Design: Aluminum Fin Array with Tunnel Eﬀect layout creates micro vortices that boost the airow and circulate it around the heatpipes.
                            High Performance Heat Pipes: C612 is equipped with four 6mm heat pipes which is key component for high cooling performance. Noise 10-37 dBA (Max)
                            <br>Price : Rs 1,599
                            <br><br><a href="https://amzn.eu/d/cGKyhTC">Click to buy</a>
                    </p>

                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- cc2 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="cpu img/cp2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Deepcool GAMMAXX AG300 CPU Air Cooler
                    </h2>
                    <p>
                        Fan Speed : 500~3050 RPM±10%
                        Fan Airflow : 36.75 CFM
                        Fan Air Pressure : 2.89 mmAq
                        Fan Noise : ≤30.5 dB(A)
                        Fan Connector : 4-pin PWM I Bearing Type : Hydro Bearing
                    </p>
                    <p>
                        About this item <br>

                        <br>Price : Rs 1,337
                        <br><br><a href="https://amzn.eu/d/gI88C9a">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- cc3 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="cpu img/cp3.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Cooler Master Hyper 212 LED Turbo ARGB CPU Cooler
                    </h2>
                    <p>

                        Item Dimensions LxWxH 12 x 11 x 15.9 Centimeters
                        Brand Cooler Master
                        Voltage 12 Volts
                        Wattage 260 Watts
                        Cooling Method Fan
                    </p>
                    <p>
                        About this item<br>
                        Push and pull dual SickleFlow 120 ARGB to maximize CPU cooling and looking colorful while doing it.
                        Included Mini ARGB controller gives you versatility for your favorite color arrays.
                        Black aluminum top cover offers a premium finish.
                        Direct Contact Technology using 4 copper heat pipes creates sleek surface for exceptional heat dissipation
                        <br>Price : Rs 3,799
                        <br><br><a href="https://amzn.eu/d/b7mOPEM">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- cc4 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="cpu img/cp4.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        DEEPCOOL GAMMAXX L240 ARGB 240mm AIO Liquid CPU Cooler
                    </h2>
                    <p>
                        Item Dimensions LxWxH 5.7 x 4.4 x 9.1 Centimeters
                        Brand DeepCool
                        Voltage 5 Volts
                        Wattage 2.04 Watts
                        Cooling Method Water
                    <p>
                        About this item <br>
                        Deepcool Gammaxx L240 ARGB equipped with Anti-Leak technology delivers efficient cooling with our dual chamber pump and dual 120mm ARGB fans
                        Aluminum/ 282 x 120 x 27 mm/ 2x Deepcool 120mm ARGB Fans
                        500~1800 RPM (PWM) / 69.34 CFM (Max)/ 2.42mmH2O (Max)/ ≤30 dBA
                        Intel LGA2066/2011-v3/2011/1700/1200/1151/1150/1155, AMD AM4
                        3 Years Brand Warranty
                        <br>Price : Rs 6,489
                        <br><br><a href="https://amzn.eu/d/5FfQi9p">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- cc5 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="cpu img/cp5.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Cooler Master MasterLiquid ML240L RGB V2 CPU Liquid Cooler - Black
                    </h2>
                    <p>

                        Item Dimensions LxWxH 32.7 x 23.5 x 13.9 Centimeters
                        Brand Cooler Master
                        Power Connector Type 4-Pin
                        Voltage 12 Volts
                        Wattage 260 Watts
                    <p>
                        About this item <br>
                        3rd Gen 3rd Generation Dual Chamber Pump for overall cooling efficiency and performance
                        New SickleFlow Fan - Refreshed exterior design for improved lighting and fan blades for a quiet airflow performance
                        Larger Surface Area - Increased the surface area of the fins on the radiator for better heat dissipation
                        Industrial Grade Seal High Industrial Grade EPDM material to strengthen the seal for improved longevity and Anti-Leaking
                        RGB Lighting - Signature cooling performance with fully customizable RGB lighting that is certified compatible with all major motherboard manufacturers
                        A wired RGB Controller Included
                        CPU Socket Support: LGA2066, LGA2011-v3, LGA2011, LGA1200, LGA1151, LGA1150, LGA1156, LGA1155, AM4, AM3+, AM3, AM2+, AM2, FM2+, FM2, FM1
                        <br>Price :Rs 6,549
                        <br><br><a href="https://amzn.eu/d/2eUaNr6">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- cc6 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="cpu img/cp6.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Deepcool AG400 WH ARGB Efficient 4 Heat Pipes CPU Cooler
                    </h2>
                    <p>

                        Item Dimensions LxWxH 12.5 x 9.2 x 15 Centimeters
                        Brand DeepCool
                        Power Connector Type 4-Pin
                        Cooling Method Fan
                        Noise Level 31.6 dB

                    </p>
                    <p>
                        The DeepCool AG400 WH ARGB is a single tower 120mm CPU cooler that builds upon our legacy for high-quality cooling performance but stripped down for a streamlined and efficient package.
                        Fan Dimensions : 120 × 120 × 25 mm
                        Fan Speed : 500~2000 RPM±10% ; Fan Airflow : 75.89 CFM ; Fan Air Pressure : 2.53 mmAq ; Fan Noise : ≤31.6 dB(A)
                        Intel LGA1700/1200/1151/1150/1155, AMD AM5/AM4
                        3 Years Manufacturer Warranty
                        <br>Price : Rs 3,035
                        <br><br><a href="https://amzn.eu/d/0CSpjSA">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- cc7 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="cpu img/cp7.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Cooler Master ML360 Illusion CPU Liquid Cooler - Black
                    </h2>
                    <p>

                        Brand Cooler Master
                        Power Connector Type 3-Pin
                        Voltage 12 Volts
                        Wattage 2.36 Watts
                        Cooling Method Water

                    </p>
                    <p>
                        Translucent Dome: Stunning lighting visuals with translucent water chamber dome compatible with software customization.
                        MasterFan MF120 Halo: Dual loop Gen 2 Addressable RGB fans with 24 individual ARGB LEDs.
                        3rd Gen Dual Chamber Pump: Next level cooling with our redesigned housing and impeller to eliminate heat better than ever while keeping the sound at a chilling silence.
                        Expanded Dissipation Surface Area: Widened radiator water channels for increased cooling surface area.
                        Industrial Grade Seal: High Industrial Grade EPDM materials reinforces the seal for improved longevity and anti-leak prevention.
                        <br>Price :Rs 11,939
                        <br><br><a href="https://amzn.eu/d/4Bv952g">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- cc8 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="cpu img/cp8.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Cooler Master Hyper 212 ARGB CPU Air Cooler
                    </h2>
                    <p>
                        Item Dimensions LxWxH 16 x 10 x 23.1 Centimeters
                        Brand Cooler Master
                        Voltage 12 Volts
                        Wattage 2.28 Watts
                        Cooling Method Air
                    <p>
                        Redesigned curved blades and frame optimizes airflow and static pressure with customizable lighting
                        Included Mini ARGB controller gives you versatility for your favorite color arrays.
                        Stacked fin array provides low airflow resistance allowing cooler air flow through the heatsink
                        Direct Contact Technology using 4 copper heat pipes deliver exceptional heat dissipation
                        <br>Price : Rs 2,999
                        <br><br><a href="hhttps://amzn.eu/d/1DVFV17">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- cc 9 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="cpu img/cp9.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Deepcool AK400 WH 120mm Fan 4-pin PWM Air Cooler/CPU Fan
                    </h2>
                    <p>

                        Item Dimensions LxWxH 12.7 x 9.7 x 15.5 Centimeters
                        Brand DeepCool
                        Power Connector Type 4-Pin
                        Voltage 12 Volts
                        Wattage 220 Watts
                    </p>
                    <p>
                        About this item <br>
                        Colour : White I Fan Dimensions : 120×120×25 mm
                        Fan Speed : 1850 RPM I Fan Connector : 4-pin PWM
                        Bearing Type : Fluid Dynamic Bearing I Fan Airflow : 66.47 CFM
                        Fan Air Pressure : 2.04 mmAq I Fan Rated Voltage : 12 VDC
                        1 Year Manufacturer Warranty
                        <br>Price : Rs 3,156
                        <br><br><a href="https://amzn.eu/d/jf22gpe">Click to buy</a>
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
                    <img src="cpu img/cp10.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        ARCTIC Freezer 34 eSports DUO Tower CPU Air Cooler
                    </h2>
                    <p>
                        Item Dimensions LxWxH 19 x 13 x 11 Centimeters
                        Brand ARCTIC
                        Power Connector Type 3-Pin
                        Voltage 12 Volts
                        Wattage 210 Watts
                    </p>
                    <p>
                        About this item <br>
                        ARCTIC launches their new Gaming Tower CPU Air Cooler with Freezer 34 eSports DUO. The model comes with a new pressure-optimized Dual 120mm BioniX P-fan at a speed of 200 - 2100rpm.
                        The Dual BioniX P-fans works in push-pull-configuration, resulting in increased airflow ensuring more cold air is transported into the heatsink for cooling and the heat from the CPU is dissipated even faster from the heat sink.
                        No thermal throttling on your CPU at high turbo clock speeds and overclocking, so you can reach the maximum FPS with minimal noise levels while gaming. The contact surface of the Freezer 34 heat pipes is right where the processor DIE is and covers even the largest versions (18 core).
                        Thanks to its compact dimensions of only 124 x 157 x 103 mm, there are almost no restrictions when using RAM modules including RAM modules with larger heat sinks. The cooler is fast and easy to install and extremely reliable.
                        The model is compatible with both Intel: 1700 (with proper kit), 2066, 2011(-3), 1155, 1151, 1150, 1200 and AMD AM4 Processors. To receive your Free LGA1700 Installation kit please reach out on 080-47188277 or visit: https://www.arctic.de/en/support/lga1700-mounting-kits/
                        <br>Price :Rs 7,299
                        <br><br><a href="https://amzn.eu/d/1oKUmHJ">Click to buy</a>
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