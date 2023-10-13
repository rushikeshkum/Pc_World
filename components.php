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
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

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
                  <a class="nav-link " id="user">Welcome <?php echo  $_SESSION['username']; ?></a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <!-- components  -->

   <!-- components  -->

   <div class="containercom">

      <h3 class="title"> Computer components </h3>

      <div class="products-containercom">

         <div class="product" data-name="p-1">
            <a href="components_mb.php"><img src="components res/mb.png" alt=""></a>
            <h3>Motherboard</h3>
            <div class="price">Click for more</div>
         </div>

         <div class="product" data-name="p-2">
            <a href="components_ram.php"> <img src="components res/ram.png" alt=""></a>

            <h3>RAM</h3>
            <div class="price">Click for more </div>
         </div>

         <div class="product" data-name="p-3">
            <a href="components_processor.php"><img src="components res/cpu.png" alt=""></a>
            <h3>Processor</h3>
            <div class="price">Click for more</div>
         </div>

         <div class="product" data-name="p-4">
            <a href="components_case.php"><img src="components res/case.png" alt=""></a>
            <h3>Case</h3>
            <div class="price">Click for more</div>
         </div>

         <div class="product" data-name="p-5">
            <a href="components_storage.php"><img src="components res/storage.png" alt=""></a>
            <h3>Storage</h3>
            <div class="price">Click for more</div>
         </div>

         <div class="product" data-name="p-6">
            <a href="components_cpu cooler.php"><img src="components res/cpucooler.png" alt=""></a>
            <h3>Cpu Cooler</h3>
            <div class="price">Click for more</div>
         </div>

         <div class="product" data-name="p-6">
            <a href="components_gpu.php"><img src="components res/gpu.png" alt=""></a>
            <h3>Graphics Card</h3>
            <div class="price">Click for more</div>
         </div>

         <div class="product" data-name="p-6">
            <a href="components_psu.php"><img src="components res/power supply.png" alt=""></a>
            <h3>Power Supply</h3>
            <div class="price">Click for more</div>
         </div>

         <div class="product" data-name="p-6">
         <a href="components_os.php"><img src="components res/os.png" alt=""></a>
            <h3>Operating System</h3>
            <div class="price">Click for more</div>
         </div>

      </div>

   </div>

   <div class="products-preview">

      <div class="preview" data-target="p-1">
         <i class="fas fa-times"></i>
         <img src="components res/case.png" alt="">
         <h3>organic strawberries</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-2">
         <i class="fas fa-times"></i>
         <img src="images/2.png" alt="">
         <h3>organic onions</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-3">
         <i class="fas fa-times"></i>
         <img src="images/3.png" alt="">
         <h3>organic tomatoes</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-4">
         <i class="fas fa-times"></i>
         <img src="images/4.png" alt="">
         <h3>organic brinjal</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-5">
         <i class="fas fa-times"></i>
         <img src="images/5.png" alt="">
         <h3>organic broccoli</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-6">
         <i class="fas fa-times"></i>
         <img src="images/6.png" alt="">
         <h3>organic potatoes</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>

   </div>
   <!-- components -->


</body>

</html>