<?php 

session_start();
$con=mysqli_connect("localhost","root","","signup");




if(mysqli_connect_error()){
  echo"<script>
    alert('cannot connect to database');
    window.location.href='buildpc_mycart.php';
  </script>";
  exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['purchase']))
  {
    $current_date_time = date("Y-m-d H:i:s");
    $tokenorder = bin2hex(random_bytes(6));
    
    $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`,`token_order`,`date_time` ) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]','$tokenorder','$current_date_time')";
    
    $email =  $_POST['email'];
         
  
         $to = "$email";
        $username = $_POST["full_name"];
        $phone = $_POST["phone_no"];
        $message = $_POST["address"];

        $subject =  "Order #$tokenorder confirmed | Thank you for placing your order!";
        $body = "Hello {$username},

        Thank you for your order. We’ll send a confirmation when your order ships. Your estimated delivery date is indicated below. If you would like to view the status of your order or make any changes to it, please visit Your Orders.
        
        Your order details are as follows:
        ";
          $total=0;
          foreach ($_SESSION['cart'] as $key => $values) {
            $Item_Name = $values['Item_Name'];
            $Price = $values['Price'];
            $Quantity = $values['Quantity'];
            $subtotal = $Price * $Quantity;
        
            $body .= "
                      Product Name =$Item_Name
                      Quantity=$Quantity 
                      Price=Rs $Price/-
                      Total Price = Rs $subtotal/-
                      
                      ";
                      $total += $subtotal;
        }
        
        $body .= "Your grand total is= Rs $total/-  

        We will notify you once your order has been shipped. If you have any questions, please contact us.
        Thank you for shopping with us!
                    
        Your order will be sent to this Address:

        $username
        $phone
        $message";
        
        # More headers
        $headers = 'From: clgproject2222@gmail.com';

        $mail = mail($to,$subject,$body);

         
   
   if(mysqli_query($con,$query1))
    {
      
      $Order_Id=mysqli_insert_id($con);
      $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
      $stmt=mysqli_prepare($con,$query2);
      if($stmt)
      {
        mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
        foreach($_SESSION['cart'] as $key => $values)
        {
          $Item_Name=$values['Item_Name'];
          $Price=$values['Price'];
          $Quantity=$values['Quantity'];
          mysqli_stmt_execute($stmt);
        }
        unset($_SESSION['cart']);
        echo"<script>
          alert('Your order has been Placed');
          window.location.href='buildpc.php';
        </script>";
      }
      else
      {
        echo"<script>
          alert('SQL Query Prepare Error');
          window.location.href='buildpc_mycart.php';
        </script>";
      }
    }
    else
    {
      echo"<script>
        alert('SQL Error');
        window.location.href='buildpc_mycart.php';
      </script>";
    }
  }
}

?>