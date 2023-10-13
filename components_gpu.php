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

    <!-- gpu1 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="gpu img/gpu1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Colorful GeForce GT 1030 4GB DDR4 RAM GDDR4 Pci_e Graphics Card
                    </h2>
                    <p>
                        Graphics Coprocessor NVIDIA GeForce GT 1030
                        Brand Colorful
                        Graphics RAM Size 4 GB
                        Graphics Processor Manufacturer NVIDIA
                        Graphics RAM Type GDDR4
                        Compatible Devices Desktop
                        <br><br> <b>About this item<br>
                            Package Contents: Colorful GT 1030 2G V5-V Graphics Card
                            Series: Colorful GT1030 4G-V
                            CUDA Cores: 384
                            Warranty: 3 Years of Brand Warranty
                            <br>Price : Rs 8,405
                            <br><br><a href="https://amzn.eu/d/23dVv1g">Click to buy</a>
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
                    <img src="gpu img/gpu2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        ZEBRONICS XPON ONU GPU (Optical Network Unit)
                    </h2>
                    <p>
                        Graphics Coprocessor NVIDIA
                        Brand ZEBRONICS
                        Graphics RAM Size 2 GB
                        Video Output Interface VGA, DVI, HDMI
                        Graphics Chipset Brand NVIDIA
                        Graphics RAM Type DDR3 SDRAM
                        Compatible Devices Desktop
                        Graphics Card Interface PCI Express
                        Memory Clock Speed 1000 MHz
                        Series ‎GT610

                    </p>
                    <p>
                        About this item <br>
                        64-bit, 2 GB DDR3 Memory with 1000 MHz
                        1000 MHzClock Speed
                        Chipset: NVIDIA
                        BUS Standard: PCI 2.0
                        Graphics Engine: 610 | Memory Interface 64 bit
                        <br>Price : Rs 2,670
                        <br><br><a href="https://amzn.eu/d/02B0QbT">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- gpu3 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="gpu img/gpu3.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        AMD RX580 8G pci_e_x16 Graphics Card 8GB GDDR5 Graphics Card
                    </h2>
                    <p>Graphics Coprocessor AMD
                        Brand Generic
                        Graphics RAM Size 8.00
                        GPU Clock Speed 1220 MHz
                        Video Output Interface DisplayPort, DVI, HDMI
                        Graphics Processor Manufacturer AMD
                        Graphics RAM Type GDDR5X
                        Mounting Hardware Cassette
                        Compatible Devices PCIE 16
                        Display Resolution Maximum
                    </p>
                    <p>
                        About this item<br>
                        High Definition Display: Game Graphics Card has High definition display, wide field of view, with DP, HD Multimedia Interface two mainstream high definition output interfaces, DP can support up to 7680x4320 resolution.
                        8GB GDDR5: 8GB GDDR5 (256bit) discrete graphics card, powerful image processing capability, 1244MHz core frequency, 2200MHz memory frequency, smoother gaming and application experience
                        Integrated Heat Dissipation: The integrated heat dissipation module can quickly cool down and increase the diversion space of the heat dissipation module, so that the strong wind brought by the dual fans can quickly pass through, take away the core heat, and enjoy the battle.
                        Go to the link to watch gameplay of different games on high settings on RX580 8g https://www.youtube.com/watch?v=Dd7jl0fQgBk; Competitive Mining Performance. ETH hash - 31.5MH/s KawPow - 14.5 Mh/s BeamHash - 17.5 H/s
                        Graphics Card Interface: Pci E X16
                        <br>Price : Rs 12,499
                        <br><br><a href="https://amzn.eu/d/5TGfQKi">Click to buy</a>
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
                    <img src="gpu img/gpu4.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        ASUS pci_e Cerberus GeForce GTX 1050 Ti 4GB OC Edition GDDR5 Gaming Graphics Card
                    </h2>
                    <p>
                        Graphics Coprocessor NVIDIA GeForce GTX 1050 Ti
                        Brand ASUS
                        Graphics RAM Size 4 GB
                        GPU Clock Speed 1341 MHz
                        Video Output Interface DisplayPort, DVI, HDMI
                        Graphics Chipset Brand NVIDIA
                        Graphics RAM Type GDDR5
                        Included Components Warranty card, Software drivers, Graphics card, User manual
                        Compatible Devices Desktop
                    <p>
                        About this item <br>
                        1455 MHz Boost Clock in OC mode for outstanding performance and gaming experience.
                        Extensively tested with the latest chart-topping game titles like League of Legends, Overwatch and PlayerUnknown€s Battlegrounds.
                        A strong backplate reinforces the circuit board and is a striking outward mark of Cerberus€s role as a powerful guardian.
                        Dual fan design provides 2X greater air flow.
                        Boost performance with GPU Tweak II, banish lag with wtfast, and stream in real time via with XSplit Gamecaster.
                        <br>Price : Rs 15,999
                        <br><br><a href="https://amzn.eu/d/4LHn8ve">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- gpu5 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="gpu img/gpu5.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        GIGABYTE pci_e_x16 GeForce RTX 3060 Gaming OC 12G GPU
                    </h2>
                    <p>
                        Graphics Coprocessor NVIDIA GeForce RTX 3060
                        Brand GIGABYTE
                        Graphics RAM Size 12 GB
                        GPU Clock Speed 1837 MHz
                        Video Output Interface DisplayPort, HDMI
                        Graphics Chipset Brand NVIDIA
                        Graphics RAM Type GDDR6
                        Included Components GRAPHIC CARD, USERS MANUAL
                        Compatible Devices Desktop
                    <p>
                        About this item <br>
                        NVIDIA Ampere Streaming Multiprocessors
                        2nd Generation RT Cores
                        3rd Generation Tensor Cores
                        Powered by GeForce RTX 3060
                        Integrated with 12GB GDDR6 192-bit memory interfaceGraphics Chipset Brand NVIDIA
                        Graphics RAM Type GDDR6
                        Included Components GRAPHIC CARD, USERS MANUAL
                        Compatible Devices Desktop
                        <br>Price :Rs 37,999
                        <br><br><a href="https://amzn.eu/d/i3oDBDU">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- gpu6 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="gpu img/gpu6.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        ZOTAC Gaming GeForce RTX 3060 Twin Edge 12GB GDDR6 GPU
                    </h2>
                    <p>
                        Graphics Coprocessor NVIDIA GeForce RTX 3060
                        Brand Zotac
                        Graphics RAM Size 12 GB
                        Video Output Interface PCI Express 4.0 x16
                        Graphics Chipset Brand NVIDIA
                        Graphics RAM Type GDDR6
                        Compatible Devices Desktop
                    </p>
                    <p>
                        NVIDIA Ampere architecture, 2nd Gen Ray Tracing Cores, 3rd Gen Tensor Cores
                        12GB 192-bit GDDR6, 15 Gbps, PCIE 4.0
                        IceStorm 2.0 Cooling, Active Fan Control, FREEZE fan stop, Metal Backplate
                        8K Ready, 4 Display Ready, HDCP 2.3, VR Ready
                        3 x DisplayPort 1.4a, 1 x HDMI 2.1, DirectX 12 Ultimate, Vulkan RT API, OpenGL 4.6
                        <br>Price : Rs 33,999
                        <br><br><a href="https://amzn.eu/d/56tpF1U">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- gpu7 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="gpu img/gpu7.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Sapphire Pulse AMD Radeon RX 6600 Graphic Card with 8 GB GDDR6
                    </h2>
                    <p>

                        Graphics Coprocessor AMD Radeon RX 6600
                        Brand Sapphire
                        Graphics RAM Size 8 GB
                        GPU Clock Speed 1295 MHz
                        Video Output Interface DisplayPort, HDMI
                        Graphics Processor Manufacturer AMD
                        Graphics RAM Type GDDR6
                        Mounting Hardware Graphic card
                        Compatible Devices Desktop

                    </p>
                    <p>Max-Covered cooling features 3x 100mm unique blade stack fans with wind claw design and alternate spinning
                        PCI-Express 4.0 Support
                        Protection metal back plate
                        Display Ports : DisplayPort 1.4a *3 ; HDMI 2.1*2, HDMI 2.0*1 (The middle HDMI output supports up to HDMI 2.0)
                        <br>Price :Rs 25,990
                        <br><br><a href="https://amzn.eu/d/0g2noC4">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- gpu8 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="gpu img/gpu8.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        ASUS Phoenix AMD Radeon™ RX 550 Graphics Card
                    </h2>
                    <p>
                        Graphics Coprocessor Radeon PH-RX550-4G-EVO
                        Brand ASUS
                        Graphics RAM Size 4 GB
                        Video Output Interface DisplayPort, DVI, HDMI
                        Graphics Chipset Brand AMD
                        Graphics RAM Type GDDR5
                        Recommended Uses For Product Gaming
                        Included Components 1 GRAPHICS CARD, USER MANUAL
                        Compatible Devices Desktop
                    <p>
                        IP5X dust resistance offers protection from particle ingress for better durability.
                        Dual ball fan bearings can last up to twice as long as sleeve bearing designs
                        Auto-Extreme Technology uses automation to enhance reliability.
                        AMD Radeon FreeSync offers stutter-free and tear-free gaming with FreeSync monitors.
                        A 144-hour validation program puts cards through a series of stringent tests to ensure compatibility with the latest games
                        <br>Price : Rs 9,159
                        <br><br><a href="https://amzn.eu/d/8y7UAv9">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- gpu 9 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="gpu img/gpu9.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        ARKTEK Nvidia GeForce GT730 4gb Graphic Card
                    </h2>
                    <p>
                        Graphics Coprocessor NVIDIA GeForce GT 730
                        Brand ARKTEK
                        Graphics RAM Size 4 GB
                        Graphics Chipset Brand NVIDIA
                        Graphics RAM Type GDDR3
                        Included Components CD, User Manual
                        Compatible Devices Desktop
                    </p>
                    <p>
                        About this item <br>
                        GeForce Experience
                        Game Ready Drivers
                        Nvidia ShadowPlay
                        Nvidia Ansel; Nvidia Cuda
                        Graphics Card Interface: Pci EGraphics Card Interface PCI Express
                        Memory Clock Speed 1333 MHz
                        Series ‎ArkTek GeForce GT730 4gb Graphic Card 128 bits

                        <br>Price : Rs 6,425
                        <br><br><a href="https://amzn.eu/d/2eOj6pt">Click to buy</a>
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
                    <img src="gpu img/gpu10.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        ASUS Dual AMD Radeon RX 6750 XT OC Edition 12GB GDDR6 Gaming Graphics Card
                    </h2>
                    <p>

                        Graphics Coprocessor AMD Radeon RX 6750 XT
                        Brand ASUS
                        Graphics RAM Size 12 GB
                        GPU Clock Speed 2.64 GHz
                        Video Output Interface DisplayPort, HDMI
                        Graphics Chipset Brand AMD
                        Graphics RAM Type GDDR6
                        Recommended Uses For
                    </p>
                    <p>
                        About this item <br>
                        Axial-tech fan design features a smaller fan hub that facilitates longer blades and a barrier ring that increases downward air pressure.
                        0db technology automatically stops fans to provide a silent user experience.
                        Dual ball fan bearings can last up to twice as long as sleeve bearing designs.
                        Auto-Extreme Technology uses automation to enhance reliability.
                        A protective backplate prevents PCB flex and trace damage.
                        <br><br><a href="https://amzn.eu/d/esIvlSP">Click to buy</a>
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