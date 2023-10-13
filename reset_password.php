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
    <script>
        swal(
            {"Good job!", "You clicked the button!", "success"});
    </script>

</head>

<body>

    <!-- php  register start -->

    <?php

    include 'dbcon.php';

    if (isset($_POST['submit']))
     {

        if(isset($_GET['token']))
        {

            $token= $_GET['token'];
        
            $npassword = mysqli_real_escape_string($con, $_POST['password']);
            $nConfirm_password = mysqli_real_escape_string($con, $_POST['Confirm_password']);

            #for increapt password
            $pass = password_hash($npassword, PASSWORD_BCRYPT);
            $Confirm_pass = password_hash($nConfirm_password, PASSWORD_BCRYPT);


       
        
    


            if ($npassword === $nConfirm_password) 
                {

                    $updatequerey = "update registration set password='$pass' where  token='$token' ";

                    $iquery = mysqli_query($con,$updatequerey);

                     if ($iquery)
                        {

                            $_SESSION['msg'] ="Your password has been updated";

                            header('location:login.php');
                   
                  
                        } else 
                        {
                    
                            $_SESSION['passmsg'] ="your password is not updated";
                            header('location:reset_password.php');
                   
                        }
                }else
                {
                    $_SESSION['passmsg'] = "password are not matching";
                     
                    }

            }else{
            $_SESSION['passmsg'] ="Token not found";

            ?>
                <script>
                    alert(" No token Find ");
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
                <header>Create new Password</header>

                <p class="msg1"><?php 

                if(isset($_SESSION['passmsg'])){
                    echo  $_SESSION['passmsg'];
                } 
                else{
                    echo  $_SESSION['passmsg']="";
                }
                
                 ?></p>
                <form action="" method="POST">

                <div class="field input-field">
                        <input name="password" type="password" placeholder="Create password" class="password" required>
                    </div>

                    <div class="field input-field">
                        <input name="Confirm_password" type="password" placeholder="Confirm password" class="password"
                            required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button name="submit" type="submit">Update Password</button>
                    </div>
                </form>

                <div class="form-link">
                    <span> Have an account? <a href="login.php">login</a></span>
                </div>
            </div>

          
            

            

        </div>

        
    </section>

    <!-- JavaScript -->
    <script src="js/scriptlogin.js"></script>

    <?php
    include('js/scriptlogin.js')
        ?>
</body>

</html>