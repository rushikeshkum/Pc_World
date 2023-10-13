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

    <!-- psu1 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="psu img/psu1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Artis 500 Watt Super Silent Gaming PC SMPS/Power Supply Unit

                    </h2>
                    <p>

                        Brand Artis
                        Compatible Devices Personal Computer
                        Connector Type ATX, EPS, PCI Express, Molex, SATA
                        Audio Wattage 500 Watts
                        Form Factor ATX
                        Wattage 500 Watts
                        Cooling Method Air
                        Item Dimensions LxWxH 15 x 8 x 14 Centimeters
                        Item Weight 2000 Grams
                        PCI-Express Connector Configuration
                        <br><br> <b>About this item<br>
                            ATX 12V V2.3 provides constant reliable power for INTEL and AMD chipsets
                            12cm cooling fan with speed control enables ultra silent operation,Super Silent Power Supply
                            PCI-E Ready for compatibility with NVIDIA and ATI/AMD Redon graphic cards , Longer DC Cable Supports PSU-BOTTOM-SET Cabinets
                            Built in industrial grade protections: Over Voltage, Under Voltage, Short Circuit protection ,Rep ready with less than 1W power consumption
                            High Reliability :MTBF > 200,000 hours, I/O: 20+4 Pin x 1, SATA HDD x 4, EPS 12V(4+4) x 1, Molex x 2, PCI-E P6 x 1, PCI-E P8(6+2) x 1
                            <br>Price : Rs 2,090
                            <br><br><a href="https://amzn.eu/d/1PuCTgX">Click to buy</a>
                    </p>

                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- psu2 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="psu img/psu2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Ant Esports VS450L 450 Watt Non-Modular Continuous Power Gaming Power Supply
                    </h2>
                    <p>Brand Ant Esports
                        Compatible Devices Personal Computer
                        Connector Type ATX, EPS
                        Audio Wattage 450 Watts
                        Form Factor ATX
                        Wattage 450 Watts
                        Cooling Method Air
                        Item Dimensions LxWxH 26.7 x 11.3 x 19.5 Centimeters
                        Item Weight 1.4 Kilograms
                        Power Supply Design Non-Modular

                    </p>
                    <p>
                        About this item <br>
                        Delivers lower noise, less power consumption and cooler temperatures
                        100,000 Hours MTBF, Supports ATX12V 2.3 and EPS12V 2.92 standards, Input Voltage 200-240V
                        ATX 24-Pin Connectors- 1,EPS 4+4 Pin Connectors-1, PCIe (6+2) Connectors-1, SATA Connectors-4,Peripheral 4-Pin Connectors-2
                        120 mm, Operating temperature-0-40C
                        2 Year Brand Warranty
                        <br>Price : Rs 1,711
                        <br><br><a href="https://amzn.eu/d/3KNMZ47">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- psu3 -->

    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="psu img/psu3.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Ant Esports FB550B 80 Plus Bronze Certified Non Modular Gaming Power Supply
                    </h2>
                    <p>
                        Model Name Ant Esports FP550B
                        Brand Ant Esports
                        Compatible Devices Personal Computer
                        Audio Wattage 500 Watts
                        Form Factor ATX12V
                        Wattage 550 Watts
                        Cooling Method Air
                        Item Dimensions LxWxH 26.7 x 11.3 x 19.5 Centimeters
                        Item Weight 1800 Grams
                        Power Supply Design Non-Modular
                    </p>
                    <p>
                        About this item<br>
                        80+ Bronze rated – The FB550B is 80+ bronze certified proving it reliability and performance.
                        Single 12V rail – The unit comes with a single 12V rail that delivers wattage ideal for high end systems.
                        Highly secured – Comes with OVP/OPP/SCP/UVP/OCP/OTP protection
                        Silent 120mm fan – The 120mm fan spins consistently yet quietly to keep the unit cool even under full load & is rated for 100,000 hours of lifespan!
                        Flat Cables – Has black flat cables for easy and clear wire management.
                        3 Years warranty - The PSU comes with a full 3 years warranty.
                        <br>Price : Rs 3,026
                        <br><br><a href="https://amzn.eu/d/3PXIhYg">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- psu4 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="psu img/psu4.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Ant Esports VS500L 500 Watt Non-Modular Continuous Power Gaming Power Supply
                    </h2>
                    <p>

                        Model Name Ant Esports VS500L
                        Brand Ant Esports
                        Compatible Devices Personal Computer
                        Audio Wattage 500 Watts
                        Form Factor ATX12V
                        Wattage 500 Watts
                        Cooling Method Air
                        Item Dimensions LxWxH 26.7 x 11.3 x 19.5 Centimeters
                        Item Weight 1800 Grams
                        Power Supply Design Non-Modular
                    <p>
                        About this item <br>
                        Single 12v Rail – A single 12V rail promises reliable and consistent power delivery
                        Silent 120mm fan – The 120mm fan spins consistently yet quietly to keep the unit cool even under full load & is rated for 100,000 hours of lifespan!
                        Modern Connectors – Comes with all the cables for a modern high end system including a dual 4 pin CPU connector. Constructed with passions and composed of high-grade quality components this unit ensures a stable power supply even under high loads.
                        High Quality Components – The VS500L is made with high quality components for reliable and consistent performance
                        Years Warranty – The PSU comes with a full 2 years warranty
                        <br>Price : Rs 2,013
                        <br><br><a href="https://amzn.eu/d/4GEGZrX">Click to buy</a>
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
                    <img src="psu img/psu5.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Ant Esports VS600L 600 Watt Non-Modular Continuous Power Gaming Power Supply
                    </h2>
                    <p>
                        Brand Ant Esports
                        Compatible Devices Personal Computer
                        Connector Type ATX, EPS
                        Audio Wattage 600 Watts
                        Form Factor ATX
                        Wattage 600 Watts
                        Cooling Method Air
                        Item Dimensions LxWxH 26.7 x 11.3 x 19.5 Centimeters
                        Item Weight 1800 Grams
                        Power Supply Design Non-Modular
                    <p>
                        About this item <br>
                        Single 12v Rail – A single 12V promises reliable and consistent power delivery
                        Silent 120mm fan – The 120mm fan spins consistently yet quietly to keep the unit cool even under full load & is rated for 100,000 hours of lifespan!
                        Modern Connectors – Comes with all the cables for a modern high end system including a dual 4 pin CPU connector.
                        High Quality Components – The VS600L is made with high quality components for reliable and consistent performance
                        ATX 24-Pin Connectors- 1, EPS 4+4 Pin Connectors-1, PCIe (6+2) Connectors-1, SATA Connectors-4, Peripheral 4-Pin Connectors-2
                        The PSU comes with 2 years warranty.
                        <br>Price :Rs 2,352
                        <br><br><a href="https://amzn.eu/d/eeREXCS">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- psu6 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="psu img/psu6.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        ASUS TUF Gaming 650W Bronze PSU, Power Supply
                    </h2>
                    <p>

                        Series TUF-GAMING-650B
                        Brand ASUS
                        Compatible Devices Personal Computer
                        Output Wattage 650
                        Form Factor ATX12V
                        Wattage 650 Watts
                        Cooling Method Air
                        Item Dimensions LxWxH 24 x 69 x 2.5 Centimeters
                        Item Weight 2 Grams
                        Power Supply Design Non-Modular
                    </p>
                    <p>About this item <br>
                        Military-grade Certification: All critical capacitors and chokes pass demanding tests to achieve Military-grade Certification
                        Axial-tech fan design features a smaller fan hub that facilitates longer blades and a barrier ring that increases downward air pressure
                        Dual ball fan bearings can last up to twice as long as sleeve bearing designs.
                        0dB Technology lets you enjoy light gaming in relative silence. An 80 Plus Bronze Certification is earned with high-quality components that pass rigorous testing.
                        6-year warranty included.
                        <br>Price : Rs 6,621
                        <br><br><a href="https://amzn.eu/d/dAqoTjh">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- psu7 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="psu img/psu7.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        MSI MAG A650BN Gaming Power Supply Unit: 80 Plus Bronze, 650 Watt
                    </h2>
                    <p>


                        Series MAG A650BN
                        Brand MSI
                        Compatible Devices Personal Computer
                        Connector Type PCI Express, SATA
                        Output Wattage 650
                        Form Factor ATX12V
                        Wattage 650 Watts
                        Cooling Method Air
                        Item Dimensions LxWxH 16 x 15 x 8.6 Centimeters
                        Item Weight 1590 Grams

                    </p>
                    <p>
                        About this item <br>
                        The 80 PLUS BRONZE certification promises lower energy consumption and higher efficiency.
                        The fan’s sleeve bearing reduces the noise generated while maintaining excellent heat dissipation.
                        Adopted DC-DC circuit design reduces the instability of output voltage, and ads stability to the supply of power.
                        Supports OCP, OVP, SCP, OPP, OTP protection mechanisms and provides comprehensive protection.
                        12V single-rail design that can deliver stable currents even under heavy loading.
                        <br>Price :Rs 5,450
                        <br><br><a href="https://amzn.eu/d/2pqOP8m">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- psu8 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="psu img/psu8.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Cooler Master MWE 550 Bronze V2 Power Supply - Non-Modular
                    </h2>
                    <p>
                        Model Name MWE 550 Bronze V2 230v
                        Brand Cooler Master
                        Compatible Devices Personal Computer
                        Connector Type ATX
                        Audio Wattage 550 Watts
                        Form Factor ATX
                        Wattage 550 Watts
                        Cooling Method Air
                        Item Dimensions LxWxH 14 x 15 x 8.6 Centimeters
                        Item Weight 1270 Grams
                    <p> About this item <br>
                        Compliance with latest ATX 12V V2.52 specification ensures power requirement for new age multi-core processors and Graphics card are properly met.
                        New generation circuit design such as DC-to-DC + LLC circuits offer reliable, stable output to all connected components under gaming load.
                        Certified 80 PLUS Bronze Efficiency guarantees a typical efficiency of 88% under normal operating conditions thus saving energy.
                        All flat cables take up less space and are easier to manipulate within the chassis improving ease of build and air airflow.
                        The MWE Series comes with a standard limited manufacturing warranty of 5 years from the date of purchase for complete peace of mind.<br>Price : Rs 4,239
                        <br><br><a href="https://amzn.eu/d/auhpQml">Click to buy</a>
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
                    <img src="psu img/psu9.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Corsair RM1000E 1000 Watt Fully Modular Low-Noise ATX Power Supply
                    </h2>
                    <p>Model Name 1000 Watt
                        Brand Corsair
                        Compatible Devices Personal Computer
                        Connector Type ATX
                        Audio Wattage 1000
                        Form Factor Atx,Atx12v
                        Wattage 1000 Watts
                        Item Dimensions LxWxH 8.6 x 15 x 14 Centimeters
                        Item Weight 1600 Grams
                        Power Supply Design Full Modular
                    </p>
                    <p>
                        About this item <br>
                        ATX12V / EPS12V
                        Full Modular
                        80 PLUS GOLD Certified
                        100 - 240 V 47 - 63 Hz
                        +3.3V@20A, +5V@20A, +12V@83.3A, -12V@0.3A, +5VSB@3A

                        <br>Price : Rs 16,232
                        <br><br><a href="https://amzn.eu/d/3jO9D1f">Click to buy</a>
                    </p>
                    <!--  <a href="https://www.ant-pc.com/contact" class="btn-comm mt-3" data-aos="fade-up">Contact Us <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- psu10 -->
    <section class="why-choose-sec">
        <div class="container-fluid container-fluid-cust">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 choose-img aos-init aos-animate" data-aos="fade-up">
                    <img src="psu img/psu10.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 choose-content">
                    <h2 class="section-heading-w">
                        Corsair HX1200 1200 Watt 80+ Platinum Fully Modular PSU/
                    </h2>
                    <p>Series HX
                        Brand Corsair
                        Compatible Devices Personal Computer
                        Output Wattage 1200
                        Form Factor ATX12V
                        Wattage 1200 Watts
                        Cooling Method Air
                        Item Dimensions LxWxH 39 x 22 x 15 Centimeters
                        Item Weight 2.3 Kilograms
                        Power Supply Design
                    </p>
                    <p>
                        About this item <br>
                        80 PLUS Platinum efficiency, delivering 90% energy efficiency at real world load conditions.
                        ZeroRPM mode for fanless operation at low loads and outstanding noise reduction.
                        135mm thermally controlled, fluid dynamic bearing fan only spins up as needed.
                        Fully modular cables for easy installation, less clutter, and helps maximize airflow through your computer's chassis.
                        Engineered to meet maximum power output at a server-grade 50°C temperature rating.
                        <br>Price : Rs 33,999
                        <br><br><a href="https://amzn.eu/d/6yGO1dt">Click to buy</a>
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