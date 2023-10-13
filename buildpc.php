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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bootstrap 5 homepage template</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/stylefooter.css">

  <link rel="stylesheet" href="css/stylecart.css">

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container ">
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
            <a class="nav-link " id="user">Welcome
              <?php echo $_SESSION['username']; ?>
            </a>
          </li>
        </ul>

      </div>
    </div>
    <div>
      <?php
      $count = 0;
      if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
      }
      ?>
      <a href="buildpc_mycart.php" class="btn btn-success  ">My Cart (
        <?php echo $count; ?>)
      </a>
    </div>
  </nav>
  <section class="sectionmb">
    <h1 class="title1">Motherboard</h1>

    <div class="newcart">
      <div class="gridcart">


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://dlcdnwebimgs.asus.com/files/media/620E2CDE-9776-43C3-A42A-7C71FA472699/v1/img/kv/ROG-Strix-B760-I-Gaming.png" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">ROG STRIX B760-I GAMING WIFI</h1>
                <p class="card-textcart">
                  TUF Gaming series distills essential elements of the latest AMD and Intel
                  with wifi AMD AM4 Socket Ryzen
                <p class="card-textcart">Price: Rs.4500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="ROG STRIX B760-I GAMING Motherboard">
                <input type="hidden" name="Price" value="4500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://static.gigabyte.com/StaticFile/Image/Global/7d708b85b3cb23f1f246648e0ec95986/Product/30665/Png" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Intel H610 Motherboard</h1>
                <p class="card-textcart">
                  Supports 13th/12th Gen Intel® Core™ Series Processors
                  Dual Channel Non-ECC Unbuffered DDR4, 2 DIMMs
                <p class="card-textcart">Price: Rs.4000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Intel H610 Motherboard">
                <input type="hidden" name="Price" value="4000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/13-144-563-13.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> MSI MPG Z790 Motherboard</h1>
                <p class="card-textcart">
                  MSI MPG Z790 CARBON WIFI LGA 1700 Intel Z790 SATA 6Gb/s DDR5 ATX Motherboard Supports 12th/13th Gen Intel.
                <p class="card-textcart">Price: Rs.5000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" MSI MPG Z790 Motherboard">
                <input type="hidden" name="Price" value="5000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/13-145-248-V01.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> GIGABYTE B550 AORUS ELITE</h1>
                <p class="card-textcart">
                  GIGABYTE B550 AORUS ELITE AX V2 AM4 AMD B550 ATX Motherboard with Dual M.2, SATA 6Gb/s, USB 3.2 Gen 2, 2.4/5
                <p class="card-textcart">Price: Rs.8,000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="GIGABYTE B550 AORUS ELITE">
                <input type="hidden" name="Price" value="8000">
              </div>
            </div>
          </form>
        </div>


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/13-145-420-04.png" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> GIGABYTE Z790 UD AC </h1>
                <p class="card-textcart">
                  GIGABYTE Z790 UD AC LGA 1700 Intel Z790 ATX Motherboard with DDR5, Triple M.2, PCIe 5.0, USB 3.2 Gen 2 2.AX V2
                <p class="card-textcart">Price: Rs.7000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" GIGABYTE Z790 UD">
                <input type="hidden" name="Price" value="7000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/13-119-597-01.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> ASUS ROG Maximus </h1>
                <p class="card-textcart">
                  ASUS ROG Maximus Z790 Hero (WiFi 6E) LGA 1700 (Intel 13th&12th Gen) ATX Gaming Motherboard PCIe 5.0, DDR5,
                <p class="card-textcart">Price: Rs.8000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" ASUS ROG Maximus ">
                <input type="hidden" name="Price" value="8000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/13-119-505-V07.jpg?ex=2" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">ROG STRIX B760-I GAMING WIFI</h1>
                <p class="card-textcart">
                  TUF Gaming series distills essential elements of the latest AMD and Intel
                  with wifi AMD AM4 Socket Ryzen
                <p class="card-textcart">Price: Rs.9500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="ROG STRIX B760-I GAMING Motherboard">
                <input type="hidden" name="Price" value="9500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/13-119-581-10.jpg?ex=2" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> ASUS ROG Strix B760</h1>
                <p class="card-textcart">
                  ASUS ROG Strix B760-A Gaming WiFi D4 Intel B760 (13th and 12th Gen) LGA 1700 white ATX motherboard, 12 + 1 power
                <p class="card-textcart">Price: Rs.10500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="ASUS ROG Strix B760">
                <input type="hidden" name="Price" value="10500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/13-144-569-15.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> MSI PRO Z790-P LGA</h1>
                <p class="card-textcart">
                  MSI PRO Z790-P WIFI LGA 1700 Intel Z790 SATA 6Gb/s DDR5 ATX Motherboard (13th and 12th Gen)AMD AM4
                <p class="card-textcart">Price: Rs.9500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" MSI PRO Z790-P">
                <input type="hidden" name="Price" value="9500">
              </div>
            </div>
          </form>
        </div>

        <!-- add new mb items -->
      </div>
  </section>

  <!-- RAM -->

  <section class="sectionmb">
    <h1 class="title1">Ram</h1>

    <div class="newcart">
      <div class="gridcart">


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/20-236-828-V01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">CORSAIR Vengeance 32GB</h1>
                <p class="card-textcart">
                  CORSAIR Vengeance 32GB (2 x 16GB) 288-Pin PC RAM DDR5 5600 (PC5 44800) Desktop Memory Model CMK32GX5M2B5600C36n
                <p class="card-textcart">Price: Rs.8500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="CORSAIR Vengeance 32GB">
                <input type="hidden" name="Price" value="8500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/20-236-417-02.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">CORSAIR Vengeance RGB 16GB</h1>
                <p class="card-textcart">
                  CORSAIR Vengeance RGB Pro 16GB (2 x 8GB) 288-Pin PC RAM DDR4 3200 (PC4 25600) Desktop Memory Model
                <p class="card-textcart">Price: Rs.6000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" CORSAIR Vengeance RGB Pro 16GB ">
                <input type="hidden" name="Price" value="6500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/20-231-941-03.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> G.SKILL Ripjaws V Series 16GB</h1>
                <p class="card-textcart">
                  G.SKILL Ripjaws V Series 16GB (2 x 8GB) 288-Pin PC RAM DDR4 3200 (PC4 25600) Desktop Memory Model F4-3200C16D-16GVKB
                <p class="card-textcart">Price: Rs.7000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" G.SKILL Ripjaws V Series 16GB">
                <input type="hidden" name="Price" value="7000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/20-232-920-V01.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> G.SKILL TridentZ RGB Series 32GB d</h1>
                <p class="card-textcart">
                  G.SKILL TridentZ RGB Series 32GB (2 x 16GB) 288-Pin PC RAM DDR4 3600 (PC4 28800) Desktop Memory Model F4-3600C18D-32GTZR
                <p class="card-textcart">Price: Rs.7500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" G.SKILL TridentZ RGB Series 32GB ">
                <input type="hidden" name="Price" value="7500">
              </div>
            </div>
          </form>
        </div>


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/20-236-842-V01.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart">CORSAIR Dominator RGB 32GB</h1>
                <p class="card-textcart">
                  CORSAIR Dominator Platinum RGB 32GB (2 x 16GB) 288-Pin PC RAM DDR5 5600 Desktop Memory Model
                <p class="card-textcart">Price: Rs.9000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" CORSAIR Dominator Platinum RGB 32GB">
                <input type="hidden" name="Price" value="9000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/20-331-354-V08.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Team T-FORCE VULCAN Z 16GB DDR4 </h1>
                <p class="card-textcart">
                  Team T-FORCE VULCAN Z 16GB (2 x 8GB) 288-Pin PC RAM DDR4 3200 (PC4 25600) Desktop Memory Model
                <p class="card-textcart">Price: Rs.8000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Team T-FORCE VULCAN Z 16GB ">
                <input type="hidden" name="Price" value="8000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/20-374-376-02.png" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> G.SKILL Trident Z5 RGB 64GB </h1>
                <p class="card-textcart">
                  G.SKILL Trident Z5 RGB Series 64GB (2 x 32GB) 288-Pin PC RAM DDR5 5600 Desktop Memory Model
                <p class="card-textcart">Price: Rs.13,500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="G.SKILL Trident Z5 RGB 64GB">
                <input type="hidden" name="Price" value="13500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/20-374-104-V05.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">G.SKILL Trident ZRoyal 32GB </h1>
                <p class="card-textcart">
                  G.SKILL Trident Z Royal Series 32GB (2 x 16GB) 288-Pin PC RAM DDR4 4000 (PC4 32000) Desktop Memory
                <p class="card-textcart">Price: Rs.9500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="G.SKILL Trident ZRoyal 32GB ">
                <input type="hidden" name="Price" value="9500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/20-301-458-V01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Silicon Power 16GB DDR4 3200mgz</h1>
                <p class="card-textcart">
                  Silicon Power 16GB (2 x 8GB) 288-Pin PC RAM DDR4 3200 (PC4 25600) Desktop Memory Voltage 1.35V
                <p class="card-textcart">Price: Rs.6500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" Silicon Power 16GB">
                <input type="hidden" name="Price" value="6500">
              </div>
            </div>
          </form>
        </div>

        <!-- add new mb items -->
      </div>
  </section>

  <!-- processor -->

  <section class="sectionmb">
    <h1 class="title1">Processor</h1>

    <div class="newcart">
      <div class="gridcart">


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/19-118-339-05.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Intel Core i9-12900K</h1>
                <p class="card-textcart">
                  Intel Core i9-12900K - Core i9 12th Gen Alder Lake 16-Core (8P+8E) 3.2 GHz LGA 1700 125W Intel UHD Graphics 770 Desktop Processor
                <p class="card-textcart">Price: Rs.35500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Intel Core i9-12900K">
                <input type="hidden" name="Price" value="35500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/19-118-412-V01.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Intel Core i9-13900K</h1>
                <p class="card-textcart">
                  Intel Core i9-13900K Core i9 13th Gen Raptor Lake 24-Core P-core Base Frequency: 3.0 125W Intel UHD Graphics 770 Desktop Processor
                <p class="card-textcart">Price: Rs.38000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="russhi">
                <input type="hidden" name="Price" value="38000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/19-118-414-V02.jpg?ex=2" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Intel Core i7-13700K</h1>
                <p class="card-textcart">
                  Intel Core i7-13700K Core i7 13th Gen Raptor 16-Core3.4 GHz E-core Base Frequency: 2.5 GHz Intel UHD Graphics 770 Desktop Processor
                <p class="card-textcart">Price: Rs.36000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Intel Core i7-13700K">
                <input type="hidden" name="Price" value="36000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/19-118-416-V01.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Intel Core i5-13600K</h1>
                <p class="card-textcart">
                  Intel Core i5-13600K - Core i5 13th Gen Raptor Lake 14-Core (6P+8E) 3.5 GHz LGA 1700 125W Intel UHD Graphics 770 Desktop Processor
                <p class="card-textcart">Price: Rs.31000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" Intel Core i5-13600K">
                <input type="hidden" name="Price" value="31000">
              </div>
            </div>
          </form>
        </div>


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/19-113-771-09.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> AMD Ryzen 9 7950X</h1>
                <p class="card-textcart">
                  AMD Ryzen 9 7950X - 16-Core 4.5 GHz - Socket AM5 - 170W Desktop Processor (100-100000514WOF)
                <p class="card-textcart">Price: Rs.43000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" AMD Ryzen 9 7950X">
                <input type="hidden" name="Price" value="43000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/19-113-665-V01.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> AMD Ryzen 7 5800X</h1>
                <p class="card-textcart">
                  AMD Ryzen 7 5800X - Ryzen 7 5000 Series Vermeer (Zen 3) 8-Core 3.8 GHz Socket AM4 105W None
                <p class="card-textcart">Price: Rs.27000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" AMD Ryzen 7 5800X">
                <input type="hidden" name="Price" value="27000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/19-113-736-V03.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> AMD Ryzen 5 5600</h1>
                <p class="card-textcart">
                  AMD Ryzen 5 5600 - Ryzen 5 5000 Series Vermeer (Zen 3) 6-Core 3.5 GHz Socket AM4 65W None Integrated Graphics Desktop Processor
                <p class="card-textcart">Price: Rs.20500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="AMD Ryzen 5 5600">
                <input type="hidden" name="Price" value="20500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/19-113-787-02.png" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> AMD Ryzen 5 7600</h1>
                <p class="card-textcart">
                  AMD Ryzen 5 7600 - Ryzen 5 7000 Series 6-Core 3.8 GHz Socket AM5 65W AMD Radeon Integrated Graphics Desktop Processor
                <p class="card-textcart">Price: Rs.27500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" AMD Ryzen 5 7600">
                <input type="hidden" name="Price" value="27500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/19-113-792-03.png" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">AMD Ryzen 9 7900X</h1>
                <p class="card-textcart">
                  AMD Ryzen 9 7900X3D - Ryzen 9 7000 Series 12-Core 4.4 GHz Socket AM5 120W AMD Radeon Graphics Desktop Processor
                <p class="card-textcart">Price: Rs.40500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="AMD Ryzen 9 7900X">
                <input type="hidden" name="Price" value="40500">
              </div>
            </div>
          </form>
        </div>

        <!-- add new mb items -->
      </div>
  </section>

  <!-- Case-->

  <section class="sectionmb">
    <h1 class="title1">PC case (cabinet)</h1>

    <div class="newcart">
      <div class="gridcart">


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/AK91S2205200GA8HQ98.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> MONTECH SKY ONE LITE</h1>
                <p class="card-textcart">
                  MONTECH SKY ONE LITE ATX Gaming Computer Case with 3 High Airflow Fans, Mesh Front Panel Tempered Glass, ATX Micro-ATX PC Case Mid Tower with ARGB Lighting Strip,
                <p class="card-textcart">Price: Rs.6000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="MONTECH SKY ONE LITE">
                <input type="hidden" name="Price" value="6000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/11-854-116-01.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Phanteks Eclipse G360A</h1>
                <p class="card-textcart">
                  Phanteks Eclipse G360A PH-EC360ATG_DBK02 Black Steel / Tempered Glass ATX Mid Tower Computer Case Mid Tower with ARGB Lighting Strip,Case with 3 High Airflow Fans
                <p class="card-textcart">Price: Rs.7000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Phanteks Eclipse G360A">
                <input type="hidden" name="Price" value="7000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/AK91S2205200H0AQ7B0.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> MONTECH SKY ONE LITE</h1>
                <p class="card-textcart">
                  MONTECH SKY ONE LITE ATX Gaming Computer Case with 3 High Airflow Fans, Mesh Front Panel Tempered Glass, ATX Micro-ATX PC Case Mid Tower with ARGB Lighting Strip,
                <p class="card-textcart">Price: Rs.6500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="  MONTECH SKY ONE LITE">
                <input type="hidden" name="Price" value="6500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/11-352-180-V13.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Fractal RGB</h1>
                <p class="card-textcart">
                  Fractal Design Pop XL Air RGB Black TG ATX High-Airflow Clear Tempered Glass Window Full Tower Computer Case
                <p class="card-textcart">Price: Rs.7800</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Fractal Design Pop">
                <input type="hidden" name="Price" value="78000">
              </div>
            </div>
          </form>
        </div>


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/11-146-343-03.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> NZXT H5 Flow</h1>
                <p class="card-textcart">
                  NZXT H5 Flow - All White CC-H51FW-01 White SGCC Steel, Tempered Glass ATX, Micro-ATX, mini-ITX Computer Cases
                <p class="card-textcart">Price: Rs.6000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" NZXT H5 Flow">
                <input type="hidden" name="Price" value="6000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/AFSTS2112102mvyB.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> LIAN LI O11</h1>
                <p class="card-textcart">
                  LIAN LI O11 Dynamic EVO O11DEW White Aluminum / Steel / Tempered Glass ATX Mid Tower Computer Case
                <p class="card-textcart">Price: Rs.8800</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" LIAN LI O11">
                <input type="hidden" name="Price" value="8800">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/11-854-117-01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Phanteks Eclipse G360A </h1>
                <p class="card-textcart">
                  Phanteks Eclipse G360A PH-EC360ATG_DMW02 Matte White Steel / Tempered Glass ATX Mid Tower Computer Case
                <p class="card-textcart">Price: Rs.7500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" Phanteks Eclipse G360A ">
                <input type="hidden" name="Price" value="7500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/APNCS210726MfAtM.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Vetroo K1 Pangolin </h1>
                <p class="card-textcart">
                  Vetroo K1 Pangolin Mid-Tower ATX PC Gaming Case, Dual Tempered Glass, USB 3.0 I/O Panel High Airflow Computer Case Max 360mm Water Cooler Support
                <p class="card-textcart">Price: Rs.11000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" Vetroo K1 Pangolin ">
                <input type="hidden" name="Price" value="11000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/11-139-158-V01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Corsair iCUE 4000X</h1>
                <p class="card-textcart">
                  Corsair iCUE 4000X RGB CC-9011205-WW White Steel /Tempered Glass ATX Mid Tower Computer Case Water Cooler Support
                <p class="card-textcart">Price: Rs.12500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" Corsair iCUE 4000X">
                <input type="hidden" name="Price" value="12500">
              </div>
            </div>
          </form>
        </div>

        <!-- add new mb items -->
      </div>
  </section>

  <!--  Storage-->
  <section class="sectionmb">
    <h1 class="title1">Storage</h1>

    <div class="newcart">
      <div class="gridcart">


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/B1V8S2205060GIT9Q4B.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> KingSpec SSD</h1>
                <p class="card-textcart">
                  KingSpec SSD Internal Solid State Drive 128GB M.2 NVMe 2280 PCIe Data Storage NAND Flash Hard Drives PC Desktop Laptop Ultrabook Upgrade for CoRe Ryzen Motherboard
                <p class="card-textcart">Price: Rs.2500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" KingSpec SSD">
                <input type="hidden" name="Price" value="2500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/20-250-244-05.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">WD_BLACK SSD</h1>
                <p class="card-textcart">
                  WD_BLACK SN850X NVMe M.2 2280 4TB PCI-Express 4.0 x4 Internal Solid State Drive (SSD) WDS400T2X0E PC Desktop Laptop Ultrabook Upgrade for CoRe Ryzen Motherboard
                <p class="card-textcart">Price: Rs.20000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="WD_BLACK SSD">
                <input type="hidden" name="Price" value="20000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/22-234-430-01.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">WD Red Pro HDD</h1>
                <p class="card-textcart">
                  WD Red Pro WD181KFGX 18TB 7200 RPM 512MB Cache SATA 6.0Gb/s 3.5" Internal Hard Drive PC Desktop Laptop Ultrabook Upgrade for CoRe Ryzen Motherboard
                <p class="card-textcart">Price: Rs.18000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="WD Red Pro HDD">
                <input type="hidden" name="Price" value="18000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/20-250-202-V06.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Western Digital Green SSD</h1>
                <p class="card-textcart">
                  Western Digital WD Green SN350 NVMe M.2 2280 1TB PCI-Express 3.0 x4 Internal Solid State Drive (SSD) WDS100T3G0C
                <p class="card-textcart">Price: Rs.3500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Western Digital Green SSD">
                <input type="hidden" name="Price" value="3500">
              </div>
            </div>
          </form>
        </div>


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/22-179-299-V01.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Seagate BarraCuda HDD</h1>
                <p class="card-textcart">
                  Seagate BarraCuda ST4000DM004 4TB 5400 RPM 256MB Cache SATA 6.0Gb/s 3.5" Hard Drives Bare Drive - OEM
                <p class="card-textcart">Price: Rs.5000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Seagate BarraCuda HDD">
                <input type="hidden" name="Price" value="5000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/20-250-243-05.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> WD BLACK SSD 1-TB</h1>
                <p class="card-textcart">
                  WD_BLACK SN850X NVMe 1.3 V-NANDM.2 2280 1TB PCI-Express 4.0 x4 Internal Solid State Drive (SSD) WDS100T2X0E V-NAND 3-bit

                <p class="card-textcart">Price: Rs.7000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="WD_BLACK  SSD">
                <input type="hidden" name="Price" value="7000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/20-147-743-V01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> SAMSUNG 970 SSD</h1>
                <p class="card-textcart">
                  SAMSUNG 970 EVO PLUS M.2 2280 1TB PCIe Gen 3.0 x4, NVMe 1.3 V-NAND 3-bit MLC Internal Solid State Drive (SSD) MZ-V7S1T0B/AM
                <p class="card-textcart">Price: Rs.5500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="SAMSUNG 970 SSD">
                <input type="hidden" name="Price" value="5500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/20-147-795-V01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> SAMSUNG 870 SSD</h1>
                <p class="card-textcart">
                  SAMSUNG 870 EVO PLUS M.2 Series 2.5" 4TB SATA NVMe III V-NAND Internal Solid State Drive (SSD) MZ-77E4T0B/AM
                <p class="card-textcart">Price: Rs.24500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" SAMSUNG 870 SSD">
                <input type="hidden" name="Price" value="24500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/20-301-428-03.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Silicon Power SSD</h1>
                <p class="card-textcart">
                  Silicon Power 1TB NVMe PCIe Gen3 x4 M.2 2280 TLC SSD Supports NVMe 1.3 Internal Solid State Drive
                <p class="card-textcart">Price: Rs.4500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="ROG STRIX B760-I GAMING Motherboard">
                <input type="hidden" name="Price" value="4500">
              </div>
            </div>
          </form>
        </div>

        <!-- add new mb items -->
      </div>
  </section>

  <!--  gpu-->
  <section class="sectionmb">
    <h1 class="title1">Graphics card</h1>

    <div class="newcart">
      <div class="gridcart">


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/B86XS22121306KTSH28.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">RX5500XT Graphics Card</h1>
                <p class="card-textcart">
                  51RISC RX5500XT 8G D6 Gaming Graphics Card with 8G/128bit/GDDR6 Memory 16GHz Memory Frequency DirectX12 3D Feature
                <p class="card-textcart">Price: Rs.12000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="RX5500XT 8G D6 Gaming Graphics Card">
                <input type="hidden" name="Price" value="12000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/14-932-580-15.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> GIGABYTE GeForce RTX 4070 Ti</h1>
                <p class="card-textcart">
                  GIGABYTE GeForce RTX 4070 Ti GAMING OC 12G Graphics Card, 3x WINDFORCE Fans, 12GB 192-bit GDDR6X, GV-N407TGAMING OC-12GD Video Card
                <p class="card-textcart">Price: Rs.50000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" GIGABYTE GeForce RTX 4070 Ti">
                <input type="hidden" name="Price" value="50000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/14-126-611-13.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">ASUS GeForceRTX 3070 Ti</h1>
                <p class="card-textcart">
                  ASUS TUF Gaming NVIDIA GeForce RTX 3070 Ti OC V2 Graphics Card (PCIe 4.0, 8GB GDDR6X, HDMI 2.1, DisplayPort 1.4a.
                <p class="card-textcart">Price: Rs.67000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="ASUS-TUF NVIDIA GeForce RTX 3070 Ti">
                <input type="hidden" name="Price" value="67000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/14-137-632-03.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">MSI Ventus GeForce RTX3060</h1>
                <p class="card-textcart">
                  MSI Ventus GeForce RTX 3060 12GB GDDR6 PCI Express 4.0 Video Card RTX 3060 Ventus 2X 12G OC
                <p class="card-textcart">Price: Rs.68000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="MSI Ventus GeForce RTX 3060 12GB">
                <input type="hidden" name="Price" value="68000">
              </div>
            </div>
          </form>
        </div>


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/14-932-550-23.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> GIGABYTE Gaming GeForce RTX 4090</h1>
                <p class="card-textcart">
                  GIGABYTE Gaming GeForce RTX 4090 24GB GDDR6X PCI Express 4.0 x16 ATX Video Card GV-N4090GAMING OC-24GD
                <p class="card-textcart">Price: Rs.233000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="GIGABYTE Gaming GeForce RTX 4090">
                <input type="hidden" name="Price" value="233000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/14-126-593-V01.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> ASUS ROG Strix GeForce RTX 4090</h1>
                <p class="card-textcart">
                  ASUS ROG Strix GeForce RTX 4090 OC Edition Gaming Graphics Card PCIe 4.0 24GB GDDR6X HDMI DisplayPort 1.4a
                <p class="card-textcart">Price: Rs.120 000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="ASUS ROG Strix GeForce RTX 4090">
                <input type="hidden" name="Price" value="12000">
              </div>
            </div>
          </form>
        </div>


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/B601S2209240Q9ZVGBE.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> RX580 8G 2048SP 256-Bit GDDR5</h1>
                <p class="card-textcart">
                  RX580 8G 2048SP 256-Bit GDDR5 PCI Express 3.0 x16 DirectX 12 WINDFORCE 3X Cooling System Gaming Video Card Gaming GPU 16GB GDDR6
                <p class="card-textcart">Price: Rs.55500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" RX580 8G 2048SP 256-Bit GDDR5">
                <input type="hidden" name="Price" value="55500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/14-932-382-S01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">GIGABYTE Radeon RX 6800 GAMING</h1>
                <p class="card-textcart">
                  GIGABYTE Radeon RX 6800 GAMING OC 16G Graphics Card, WINDFORCE 3X Cooling System, 16GB GDDR6, GV-R68GAMING OC-16GD Video Card
                <p class="card-textcart">Price: Rs.45800</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="GIGABYTE Radeon RX 6800 GAMING">
                <input type="hidden" name="Price" value="48500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/14-932-601-02.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> GIGABYTE AERO GeForce RTX 4090</h1>
                <p class="card-textcart">
                  GIGABYTE AERO GeForce RTX 4090 24GB GDDR6X PCI Express 4.0 x16 ATX Video Card GV-N4090AERO OC-24GD Video Card
                <p class="card-textcart">Price: Rs.122500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" GIGABYTE AERO GeForce RTX 4090">
                <input type="hidden" name="Price" value="122500">
              </div>
            </div>
          </form>
        </div>

        <!-- add new mb items -->
      </div>
  </section>

  <!-- cpu cooler -->
  <section class="sectionmb">
    <h1 class="title1">CPU Cooler</h1>

    <div class="newcart">
      <div class="gridcart">


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/BJ8WS2303180LIN7T84.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">ProArtist E6WHITE albino</h1>
                <p class="card-textcart">
                  ProArtist E6WHITE albino 6 heat pipe double tower CPU air-cooled radiator supports 1200/1700/AM4 E6 WHITE CPU Cooling
                <p class="card-textcart">Price: Rs.8500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="ProArtist E6WHITE albino">
                <input type="hidden" name="Price" value="8500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/APNCS2211020790RB68.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Vetroo V360 Liquid CPU Cooler</h1>
                <p class="card-textcart">
                  Vetroo V360 White Liquid CPU Cooler, 3X 120mm Addressable RGB & PWM Fans/Pump,290W TDP AIO Water Cooler supports 1200/1700/AM4
                <p class="card-textcart">Price: Rs.12000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Vetroo V360 White Liquid CPU Cooler">
                <input type="hidden" name="Price" value="12000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/APNCS2206070K7Q6UDB.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Vetroo V5 CPU Air Cooler</h1>
                <p class="card-textcart">
                  Vetroo V5 CPU Air Cooler w/ 5 Heat Pipes 120mm PWM Processor 150W 150W TDP Cooler for Intel LGA e RGB Lights Sync
                <p class="card-textcart">Price: Rs.6000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Vetroo V5 CPU Air Cooler">
                <input type="hidden" name="Price" value="6000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/35-181-202-01.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Corsair Hydro Series</h1>
                <p class="card-textcart">
                  Corsair Hydro Series, iCUE H115i ELITE CAPELLIX, 280mm Radiator, Dual ML140 RGB PWM Fans, Powerful iCUE Software, Liquid CPU Cooler
                <p class="card-textcart">Price: Rs.14000</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Corsair Hydro Series Cooler">
                <input type="hidden" name="Price" value="14000">
              </div>
            </div>
          </form>
        </div>


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/35-181-264-V01.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart">CORSAIR iCUE H100i</h1>
                <p class="card-textcart">
                  CORSAIR iCUE H100i ELITE LCD Display Liquid CPU Cooler Premium All-in-One LCD CPU Cooler
                  Brilliant IPS LCD Display
                <p class="card-textcart">Price: Rs.14000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="CORSAIR iCUE H100i cooler">
                <input type="hidden" name="Price" value="14000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/BJ8WS2303180LIN7T84.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart">ProArtist E6WHITE albino</h1>
                <p class="card-textcart">
                  ProArtist E6WHITE albino 6 heat pipe double tower CPU air-cooled radiator supports 1200/1700/AM4 E6 WHITE CPU Cooling
                  Limited time
                <p class="card-textcart">Price: Rs.6000</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="ProArtist E6WHITE albino cooler">
                <input type="hidden" name="Price" value="6000">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/35-103-329-V01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Cooler Master Hyper</h1>
                <p class="card-textcart">
                  Cooler Master Hyper 212 RGB Black Edition CPU Air Cooler, SF120R RGB Fan, Anodized Gun-Metal Black, Brushed Nickel Fins
                <p class="card-textcart">Price: Rs.5500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Cooler Master Hyper cooler">
                <input type="hidden" name="Price" value="5500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/35-101-070-V01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> ASUS ROG Ryujin RGB</h1>
                <p class="card-textcart">
                  ASUS ROG Ryujin II 360 RGB all-in-one liquid CPU cooler 360mm Radiator (3.5" color LCD, 3x Noctua iPPC 2000 PWM 120mm radiator fans
                <p class="card-textcart">Price: Rs.21500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" ASUS ROG Ryujin cooler">
                <input type="hidden" name="Price" value="21500">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll1280/35-846-027-07.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> MSI MAG Core Liquid</h1>
                <p class="card-textcart">
                  MSI MAG Core Liquid 360R V2 AIO Liquid CPU Cooler, 360mm Radiator, Triple PWM, ARGB Lighting Controlled by Software LGA 1700 Ready / AM5 Compatible
                <p class="card-textcart">Price: Rs.14500</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" MSI MAG Core Liquid cooler">
                <input type="hidden" name="Price" value="14500">
              </div>
            </div>
          </form>
        </div>

        <!-- add new mb items -->
      </div>
  </section>

  <!-- power supply -->
  <section class="sectionmb">
    <h1 class="title1">Power Supply</h1>

    <div class="newcart">
      <div class="gridcart">


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImage/17-139-301-08.png" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">CORSAIR RM850e Power Supply</h1>
                <p class="card-textcart">
                  CORSAIR RM850e Fully Modular Low-Noise ATX Power Supply - ATX 3.0 & PCIe 5.0 Compliant - 105°C-Rated Capacitors
                <p class="card-textcart">Price: Rs.10,609</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="CORSAIR RM850e Power Supply">
                <input type="hidden" name="Price" value="10609">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/17-139-300-03.png" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">CORSAIR RM750e Power Supply </h1>
                <p class="card-textcart">
                  CORSAIR RM750e Fully Modular Low-Noise ATX Power Supply - Dual EPS12V Connectors - 105°C-Rated Capacitors
                <p class="card-textcart">Price: Rs.8,141</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="CORSAIR RM750e Power Supply">
                <input type="hidden" name="Price" value="8141">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://m.media-amazon.com/images/I/81zTChlbPHL._AC_UY218_.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">MWE 550 Bronze V2 Power Supply</h1>
                <p class="card-textcart">
                  Cooler Master MWE 550 Bronze V2 Power Supply - Non-Modular | 80 Plus Bronze Certified | 120mm HDB Fan |
                <p class="card-textcart">Price: Rs.4,239</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="MWE 550 Bronze V2 Power Supply">
                <input type="hidden" name="Price" value="4239">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://m.media-amazon.com/images/I/61AVj+-q1sL._AC_UY218_.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Esports FB550B 80 Plus Power Supply</h1>
                <p class="card-textcart">
                  Ant Esports FB550B 80 Plus Bronze Certified Non Modular Gaming Power Supply/PSU for PC with Flat
                <p class="card-textcart">Price: Rs.3,026 </p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Esports FB550B 80 Plus Power Supply">
                <input type="hidden" name="Price" value="3026 ">
              </div>
            </div>
          </form>
        </div>


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/17-153-415-V01.jpg?ex=2" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Thermaltake 500W Power </h1>
                <p class="card-textcart">
                  Thermaltake Smart Series 500W SLI/CrossFire Ready Continuous Power ATX 12V V2.3 / EPS 12V 80
                <p class="card-textcart">Price: Rs.3,206</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Thermaltake Smart Series 500W Power Supply">
                <input type="hidden" name="Price" value="3206">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/AMNPS201105AfG76.jpg?ex=2" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart"> Super Flower Power Supply</h1>
                <p class="card-textcart">
                  Super Flower Legion Gold HX 650W 80+ Gold, Ultra Flexible Flat Ribbon Cables, LLC & DC power supply
                <p class="card-textcart">Price: Rs.6,496</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value=" Super Flower Legion Gold HX 650W 80+ Gold">
                <input type="hidden" name="Price" value="6496">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://cdn.mdcomputers.in/image/cachewebp/catalog/smps/nzxt/np-c850m-uk/np-c850m-uk-image-main-600x600.webp" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Nzxt C850 850 Power Supply</h1>
                <p class="card-textcart">
                  Nzxt C850 850 Watt 80 Plus Gold SMPS the C750 and C650 support NVIDIA GPUs up to 2080ti
                <p class="card-textcart">Price: Rs.10,635</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Nzxt C850 850 Power Supply">
                <input type="hidden" name="Price" value="10635">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://cdn.mdcomputers.in/image/cachewebp/catalog/smps/antec/atom-v450/atom-v450-images-main-600x600.webp" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Ant Esports VS450L SMPS</h1>
                <p class="card-textcart">
                  Ant Esports VS450L SMPS \Give your PC efficient power supply in form of the Ant Esports VS450L 450W PSU.
                <p class="card-textcart">Price: Rs.₹1,825</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Ant Esports VS450L SMPS Power Supply">
                <input type="hidden" name="Price" value="1825">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://cdn.mdcomputers.in/image/cachewebp/catalog/smps/gigabyte/p550b/p550b-image-main-600x600.webp" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Gigabyte P550B 550 Watt 80</h1>
                <p class="card-textcart">
                  Gigabyte P550B 550 Watt 80 Plus Bronze SMPS|80 Plus Bronze certified ensures to deliver 85% efficiency 50% .
                <p class="card-textcart">Price: Rs.3,300 </p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Gigabyte P550B 550 Watt 80 Plus Bronze SMPS">
                <input type="hidden" name="Price" value="3300 ">
              </div>
            </div>
          </form>
        </div>

        <!-- add new mb items -->
      </div>
  </section>

  <!-- opeating system -->
  <section class="sectionmb">
    <h1 class="title1">Oprating system</h1>

    <div class="newcart">
      <div class="gridcart">


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/32-351-748-V01.jpg?ex=2" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Microsoft Windows 11 Home (USB) Oprating System</h1>
                <p class="card-textcart">

                <p class="card-textcart">Price: Rs.11,421</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Microsoft Windows 11 Home (USB) Oprating System">
                <input type="hidden" name="Price" value="11421.28">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/32-416-892-11.jpg?ex=2" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Microsoft Windows 10 Home, 64-bit, DVD - OEM</h1>
                <p class="card-textcart">

                <p class="card-textcart">Price: Rs.16355</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="russhi">
                <input type="hidden" name="Price" value="16355">
                <input type="hidden" name="Price" value="16355">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/32-350-882-V01.jpg" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Microsoft Windows 11 Pro 64-bit, DVD - OEM oprating System</h1>
                <p class="card-textcart">

                <p class="card-textcart">Price: Rs.13068</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Microsoft Windows 11 Pro 64-bit, DVD - OEM oprating System">
                <input type="hidden" name="Price" value="13068">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/32-588-491-V01.jpg?ex=2" alt="Grand Canyon" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Microsoft Windows 10 Pro 64-bit, DVD - OEM Oprating System</h1>
                <p class="card-textcart">

                <p class="card-textcart">Price: Rs.13890</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Microsoft Windows 10 Pro 64-bit, DVD - OEM Oprating System">
                <input type="hidden" name="Price" value="13890">
              </div>
            </div>
          </form>
        </div>


        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/32-350-881-V01.jpg?ex=2" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Microsoft Windows 11 Home 64-bit, DVD - OEM Oprating System</h1>
                <p class="card-textcart">

                <p class="card-textcart">Price: Rs.9780</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Microsoft Windows 11 Home 64-bit, DVD - OEM Oprating System">
                <input type="hidden" name="Price" value="9780">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/32-351-191-05.jpg" alt="Maldives" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Microsoft Windows 11 Pro ( Key Code Email Delivery)-OEM</h1>
                <p class="card-textcart">

                <p class="card-textcart">Price: Rs.13890</p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart <span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Microsoft Windows 11 Pro  ( Key Code Email Delivery)-OEM oprating system">
                <input type="hidden" name="Price" value="13890">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/32-351-758-V01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Microsoft Windows 11 Pro Upgrade [from Home to Pro] [Digital Download]</h1>
                <p class="card-textcart">

                <p class="card-textcart">Price: Rs.8136</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Microsoft Windows 11 Pro Upgrade [from Home to Pro] Oprating System">
                <input type="hidden" name="Price" value="8136">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/32-397-686-01.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Microsoft Windows 10 Home 32-bit/64-bit (Product Key Code Email Delivery) - OEM</h1>
                <p class="card-textcart">

                <p class="card-textcart">Price: Rs.16355</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Microsoft Windows 10 Home 32-bit/64-bit (Product Key Code Email Delivery) - OEM Oprating System">
                <input type="hidden" name="Price" value="16355">
              </div>
            </div>
          </form>
        </div>

        <div class="grid-itemcart">
          <form action="buildpc_manage_cart.php" method="POST">
            <div class="card">
              <img class="card-imgcart" src="https://c1.neweggimages.com/ProductImageCompressAll300/32-351-786-02.jpg" alt="Rome" />
              <div class="card-contentcart">
                <h1 class="card-headercart">Microsoft Windows 11 Pro 64-Bit Installation / Recovery Disc Only - No License Key </h1>
                <p class="card-textcart">

                <p class="card-textcart">Price: Rs.986</p>
                </p>
                <button class="card-btncart" type="submit" name="Add_To_Cart">Add to cart<span>&rarr;</span></button>
                <input type="hidden" name="Item_Name" value="Microsoft Windows 11 Pro 64-Bit Installation Oprating System">
                <input type="hidden" name="Price" value="986">
              </div>
            </div>
          </form>
        </div>

        <!-- add new mb items -->
      </div>
  </section>


  <!-- body dev close -->
  </div>


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