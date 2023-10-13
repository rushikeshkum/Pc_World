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
                  <a class="nav-link " id="user">Welcome <?php echo  $_SESSION['username']; ?></a>
               </li>
            </ul>
           
         </div>
      </div>
      <div>
      <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
      ?>
      <a href="buildpc_mycart.php" class="btn btn-success">My Cart (<?php echo $count; ?>)</a>
    </div>
   </nav>
  <div class="container table ">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>MY CART</h1>
      </div>

      <div class="col-lg-9">
        <table class="table">
          <thead class="text-center">
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Item Name</th>
              <th scope="col">Item Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>              
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php 
              if(isset($_SESSION['cart']))
              {
                foreach($_SESSION['cart'] as $key => $value)
                {
                  $sr=$key+1;
                  echo"
                    <tr class='table1'>
                      <td  >$sr</td> 
                      <td>$value[Item_Name]</td>
                      <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                      <td>
                        <form action='buildpc_manage_cart.php' method='POST'>
                          <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                      </td>
                      <td class='itotal'></td>
                      <td>
                        <form action='buildpc_manage_cart.php' method='POST'>
                          <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                      </td>
                    </tr>
                  ";
                }
              }
            ?>
          </tbody>
        </table>
      </div>
      
      <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
          <h4>Grand Total:</h4>
          <h5 class="text-right" id="gtotal"></h5>
          <br>
          <?php 
            if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
            {
          ?>
          <form action="buildpc_purchase.php" method="POST">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="full_name" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Gmail</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="number" name="phone_no" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" name="address" class="form-control" required>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Cash On Delivery
              </label>
            </div>
            <br>
            <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
          </form>
          <?php
            }
          ?>
        </div>
      </div>

    </div>
  </div>

  	
<script>

  var gt=0;
  var iprice=document.getElementsByClassName('iprice');
  var iquantity=document.getElementsByClassName('iquantity');
  var itotal=document.getElementsByClassName('itotal');
  var gtotal=document.getElementById('gtotal');

  function subTotal()
  {
    gt=0;
    for(i=0;i<iprice.length;i++)
    {
      itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

      gt=gt+(iprice[i].value)*(iquantity[i].value);

    }
    gtotal.innerText=gt;
  }
  

  subTotal();

</script>

</body>
</html>