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

    if (isset($_POST['submit'])) {
        $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $Confirm_password = mysqli_real_escape_string($con, $_POST['Confirm_password']);

        #for increapt password
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $Confirm_pass = password_hash($Confirm_password, PASSWORD_BCRYPT);

        # query for multiple email
        $emailquery = "select * from registration where email ='$email'";
        $query = mysqli_query($con, $emailquery);

        $token = bin2hex(random_bytes(15));

        #email address multiple row find then chek 
    
        $emailcount = mysqli_num_rows($query);

        if ($emailcount > 0) {

            ?>
            <script>
                alert("Email already exist");
            </script>
            
              <?php

    


        } else {
            if ($password === $Confirm_password) {

                $insertquery = "insert into registration ( full_name, username, email, password, Confirm_password,token) VALUES  ('$full_name','$username','$email','$pass','$Confirm_pass','$token')";

                $iquery = mysqli_query($con, $insertquery);

                if ($iquery) {
                    ?>
                    <script>
                        alert("Register Successful");
                    </script>

                    <?php
                } else {
                    ?>
                    <script>
                        alert("  Not Registered  ");
                    </script>

                    <?php
                }
            } else { ?>
                <script>
                    alert(" Password are not matching ");
                </script>

                <?php

            }

        }

    }


    ?>

    <!-- php register end -->

    <!-- php for login start -->
    <?php

    include 'dbcon.php';

    if (isset($_POST['login'])) {
        $emaillog = $_POST['emaillog'];
        $passwordlog = $_POST['passwordlog'];

        #for validation email in database
        $email_search = "select * from registration where  email ='$emaillog'";
        $querylog = mysqli_query($con, $email_search);

        #check email ios present in database
    
        $email_count = mysqli_num_rows($querylog);

        if ($email_count) {
            $email_pass = mysqli_fetch_assoc($querylog);

            $db_pass = $email_pass['password'];

            $_SESSION['username'] = $email_pass['username'];

            #cheking password
    
            $pass_decode = password_verify($passwordlog, $db_pass);

            if ($pass_decode) {


                ?>

                <script>
                    alert(" Login successful ");

                </script>

                <?php
                ?>
                <script>
                    location.replace("main.php");
                </script>

                <?php

            } else {
                ?>
                <script>
                    alert(" Password is incorrect ");
                </script>

                <?php
            }
        } else {
            ?>
            <script>
                alert(" Invalid email ");
            </script>

            <?php
        }

    }

    ?>

    <!-- php for login end -->




    <!-- login -->
    <section class="container forms">
        <img src="images/login_img1.jpg" class=login_img alt="loginimage">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div>
                    <p class="msg1" >
                        <?php
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                            }else{
                                echo $_SESSION['msg'] ="you are logged out. please Login again";
                            }

                        ?>

                    </p>
                </div>
                    <div class="field input-field">
                        <input name="emaillog" type="email" placeholder="Email" class="input">
                    </div>

                    <div class="field input-field">
                        <input name="passwordlog" type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="recover_email.php" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button name="login" type="submit">Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Register here</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="images/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

              
                    <div class="field input-field">
                        <input name="full_name" type="text" placeholder="Full Name" class="input" required>
                    </div>
                    <div class="field input-field">
                        <input name="username" type="text" placeholder="Username" class="input" required>
                    </div>
                    <div class="field input-field">
                        <input name="email" type="email" placeholder="Email" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input name="password" type="password" placeholder="Create password" class="password" required>
                    </div>

                    <div class="field input-field">
                        <input name="Confirm_password" type="password" placeholder="Confirm password" class="password"
                            required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button type="submit" name="submit">Signup</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="images/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
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