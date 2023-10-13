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

    <!-- c1 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="case img/c1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        XPG STARKER AIR Mid Tower Tempered Glass Black Computer Case Gaming Cabinet
                    </h2>
                    <p>

                        Brand A-DATA
                        Case Type Mid Tower
                        Colour Black
                        Material Glass
                        Cooling Method Air
                        <br><br> <b>About this item<br>
                            Black I Mid Tower I 465 X 215 X 400 mm I 4mm Tempered Glass*1 Side Panel
                            3.5" HDD/HDD Tray : 2+1 (Combo 3.5” + 2.5”) I 2.5" HDD/SSD Tray : 2+1 (Combo 3.5” + 2.5”)
                            I/O Port : x2 USB 3.0 I 1 Hybrid Audio Port I 1 LED Control Button I 1 Reset Button I 1 Power Button
                            FRONT: 1 x XPG VENTO 120 Fan I REAR: 1 x XPG VENTO ARGB 120 Fan
                            2 Years Manufacturer Warranty
                            <br>Price : Rs 5,150
                            <br><br><a href="https://amzn.eu/d/6D9F8C2">Click to buy</a>
                    </p>

                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- c2 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="case img/c2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        XPG STARKER AIR Mid Tower Tempered Glass White Computer Case Gaming
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
                        White I Mid Tower I 465 X 215 X 400 mm I 4mm Tempered Glass*1 Side Panel
                        3.5" HDD/HDD Tray : 2+1 (Combo 3.5” + 2.5”) I 2.5" HDD/SSD Tray : 2+1 (Combo 3.5” + 2.5”)
                        I/O Port : x2 USB 3.0 I 1 Hybrid Audio Port I 1 LED Control Button I 1 Reset Button I 1 Power Button
                        FRONT: 1 x XPG VENTO 120 Fan I REAR: 1 x XPG VENTO ARGB 120 Fan
                        2 Years Manufacturer Warranty
                        <br>Price : Rs 4,971
                        <br><br><a href="https://amzn.eu/d/aAImpTm">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- c3 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="case img/c3.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Ant Esports ICE-280TGW Mid Tower Computer Case I Gaming Cabinet
                    </h2>
                    <p>
                        Brand Ant Esports
                        Motherboard Compatibility ATX
                        Colour White
                        Material Tempered Glass
                        Cooling Method Air
                    </p>
                    <p>
                        About this item<br>
                        White, Mid Tower, 365 x 205 x 440mm, Transparent Side Pane
                        7 Expansion Slots, 2 x 3.5” Drive Bay, 2 x 2.5” Drive Bay
                        1 x USB 3.0, 2 x USB 2.0, 1 x Audio In, 1 x Mic, Restart Button
                        Pre-Installed 1 x 120 mm Rear Fan, Fan Support : 3 x 120mm Front, 2 x 120mm Top, 1 x 120 mm Rear, 2 x 120mm Bottom
                        2 x HDD, 2 x SSD, VGA Card : 335mm, CPU Cooler Height : 150mm
                        <br>Price : Rs 3,764
                        <br><br><a href="https://amzn.eu/d/cgX0lNG">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- c4 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="case img/c4.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        ALKETRON - Icecube T100 Gaming cabinet
                    </h2>
                    <p>

                        Brand ALKETRON
                        Material Aluminium
                        Cooling Method Water
                        Model Name T100
                        Number of USB 3 Ports 1

                    </p>
                    <p>
                        About this item <br>

                        Designed & Assembled In India - High Quality Gaming PC Products by ALKETRON Computers, an Indian startup company obsessed with Quality Engineering
                        Motherboard & SMPS power supply form factor Support: ATX,Micro ATX,Mini-ITX ; Supports ARGB & Aura Sync Motherboards
                        Model Name: IceCube T-100; product Size: 425(L) * 308(W) * 377(H)mm
                        High Strength 4MM Thick Toughened Glass on 2 sided for Gorgeous display. 0.8MM High Strength Aluminum body. Empty cabinet with all the necessary front panel connections
                        Top button/Ports/ controls: 1*USB3.0; 2*USB1.0; HD AUDIO controls; Start and Reset Button ; Ideal for PC assembly with ARGB and Aura Sync
                        Configure as you like - capable of holding 1*360MM / 2*240MM / 1*120MM Liquid cooling system, Multiple SSD slots/channels . Ideal for Extreme Gaming PC builds
                        <br>Price : Rs 7,449
                        <br><br><a href="https://amzn.eu/d/93kpSuI">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- c5 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="case img/c5.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Ant Esports ICE-110 Mid-Tower Computer Case/Gaming Cabinet
                    </h2>
                    <p>
                        Brand Ant Esports
                        Motherboard Compatibility Extended ATX
                        Colour Black
                        Material Alloy Steel
                        Cooling Method Air

                    </p>
                    <p>
                        About this item <br>
                        Black, Mid-Tower, 381 x 200 x 450 mm
                        7 Expansion Slots, 2 x 3.5” Drive Bay, 2 x 2.5” Drive Bay
                        I/O Panel - 2 x USB 2.0, 1 x USB 3.0, 1 x Audio / Mic In (TRRS Port)
                        Pre-Installed - 3 x 120mm Front Fans and 1 x 120 mm Rear Fan ; Fan Support - Front : 3 x 120/140 mm, Top : 2 x 120/140 mm, Bottom : 2 x 120 mm, Rear : 1 x 120 mm
                        VGA Card Length - 340 mm , CPU Cooler Height- 165 mm
                        <br>Price :Rs 3,799
                        <br><br><a href="https://amzn.eu/d/1wBqbld">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- c6 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="case img/c6.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Ant Esports Graffiti Mid- Tower Computer Case / Gaming Cabinet
                    </h2>
                    <p>

                        Brand Ant Esports
                        Colour Black
                        Material Glass
                        Cooling Method Air
                        Fan Size 120 Millimetres
                    </p>
                    <p>
                        Black, Mid- Tower, 410 x 210 x 480 mm, Tempered Glass Side Panel
                        Expansion Slots - 7 , 2 x 3.5” Drive Bay, 3 x 2.5” Drive Bay
                        2 x USB 2.0, 1 x USB 3.0, 1 x Audio In, 1 x Mic, LED Button
                        Pre-Installed : 1 x 120 mm Rear Fans , Fan Support : 3 x 120/140 mm Front, 2 x 120/140 mm Top, 1 x 120 mm Rear
                        2 x HDD, 3 x SSD, VGA Card : 360 mm, CPU Cooler Height : 160 mm
                        <br>Price : Rs 4,739
                        <br><br><a href="https://amzn.eu/d/6Qw67c8">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- c7 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="case img/c7.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Ant Esports ICE-200TG Mid Tower Gaming Cabinet
                    </h2>
                    <p>

                        Brand Ant Esports
                        Motherboard Compatibility Micro ATX
                        Colour Black
                        Material 0.5 mm Thickness / Full Black Chassis
                        Power Supply Mounting Type Bottom Mount

                    </p>
                    <p>
                        RGB front panel with LED control button
                        Black glossy finish
                        Acrylic front panel
                        Front LED control button
                        Cable management support/separate zone for power supply and other components
                        Transparent tempered glass side panel
                        Support 2 x HDD and 2 x SSD, 1 x flash card reader/support ATX, MICRO-ATX, MINI-ITX motherboard
                        <br>Price :Rs 3,319
                        <br><br><a href="https://amzn.eu/d/9sgwkP9">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- c8 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="case img/c8.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        XPG BATTLECRUISER Super Mid-Tower Computer Case I Gaming Cabinet
                    </h2>
                    <p>
                        Brand XPG
                        Motherboard Compatibility Extended ATX
                        Case Type Midi Tower
                        Colour Black
                        Material Tempered Glass
                    </p>
                    <p>
                        Black I Mid Tower I 485 X 225 X 506 mm I Metal Construction with Glass Panels
                        3.5" HDD/HDD Tray : 2+1 I 2.5" HDD/SSD Tray : 5+1 (Combo 3.5”/2.5”)
                        I/O Port : Type C Gen.1*1, USB 3.0 * 2, HD Audio ( Mic & SW ) * 1, LED Control * 1
                        Front：3 x XPG VENTO 120 ARGB Fan I Rear：1 x XPG VENTO 120 ARGB Fan
                        2 Years Manufacturer Warranty
                        <br>Price : Rs 10,929
                        <br><br><a href="https://amzn.eu/d/jcH7lMp">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- c9 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="case img/c9.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        MSI MAG Forge M100A Micro-ATX Tower Gaming PC Case
                    </h2>
                    <p>
                        Brand MSI
                        Case Type Mini-Tower
                        Colour Black
                        Material Tempered Glass
                        Cooling Method Water
                    <p>
                        About this item <br>

                        <br>Price : Rs 5,500
                        <br><br><a href="https://amzn.eu/d/52eHqNk">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- c10 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="case img/c10.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Corsair Obsidian 500D RGB SE Mid-Tower Case
                    </h2>
                    <p>

                        Brand Corsair
                        Case Type Full Tower
                        Colour Black
                        Material Glass
                        Cooling Method Air
                    </p>
                    <p>
                        About this item <br>
                        Iconic obsidian style, with a beautiful tempered glass front panel and clean exterior lines
                        Premium tempered glass and aluminum construction, with solid aluminum top plate and door handles
                        Three ll120 rgb fans create a symphony of stunning rgb lighting
                        Integrated corsair commander pro offers full software control of your cooling and rgb lighting
                        Cooling made easy with removable front and top fan trays
                        Country of Origin: China
                        <br>Price :Rs 22,990
                        <br><br><a href="https://amzn.eu/d/39lhLp6">Click to buy</a>
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