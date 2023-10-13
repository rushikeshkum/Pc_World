<?php

session_start();

?>




<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Login and Signup Form </title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/stylelogin.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- alert box style link -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>

<body>

   

    <!-- php  register start -->

    <?php

    include 'dbcon.php';

    if (isset($_POST['submit'])) {
       
        $email = mysqli_real_escape_string($con, $_POST['email']);
         
        
        # query for multiple email
        $emailquery = "select * from registration where email ='$email'";
        $query = mysqli_query($con, $emailquery);

        #email address multiple row find then chek 
    
        $emailcount = mysqli_num_rows($query);
 
        if ($emailcount) {

            $userdata = mysqli_fetch_array($query);

            $username= $userdata['username'];
            $token =$userdata['token'];

            $subject ="Password Reset";
            $body ="Hi ,$username. Click here to reset your Password 
            http://localhost/new1/reset_password.php?token=$token";
            $sender_email ="From : project@2222gmail.com";

            if(mail($email ,$subject ,$body ,$sender_email)){
                $_SESSION['msg'] = "check your email to reset your account $email";
                header("location:login.php");
                
                echo"<script>alert('Email has been sent to your Register gmail address');</script>";

                
            }else{
               
                ?>
                    <script>
                        alert("Email sending faill");
                    </script>

                    <?php
            }


            
       

             
          

        }else{

            $_SESSION['rmsg']="Email not found";
            ?>
                    
            
                    <script>
                        alert("Email not found");
                    </script>

                    <?php
        }
    }

    


    ?>

    <!-- php register end -->



    <!-- login -->
    <section class="container forms">
        <img src="images/login_img1.jpg" class=login_img alt="loginimage">
        <div class="form login">
            <div class="form-content">
                <header>Recover Your Account </header>
                <p class="msg1"><?php 

                if(isset($_SESSION['rmsg'])){
                    echo  $_SESSION['rmsg'];
                } 
                else{
                    echo  $_SESSION['rmsg']= "";
                }
                
                 ?></p>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
                    <div class="field input-field">
                        <input name="email" type="email" placeholder="Email " class="input">
                    </div>                  
                    <div class="field button-field">
                        <button name="submit" type="submit">Send Mail</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="login.php" class="link login-link">Login</a></span>
                </div>
            </div>

            

        </div>

        
    </section>

    <!-- JavaScript -->
    <script src="js/scriptlogin.js"></script>

   
</body>

</html>