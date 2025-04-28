<?php include "header.php" ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>elearning</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
    <div class="login-form">
                <!-- logo-login -->
                <?php
                  if(isset($_REQUEST['msg']))
                  {

                    echo '<div class="alert alert-info mt-5">'.$_REQUEST['msg'].'</div>';
                  }
              ?>
        <!-- Login Admin -->
        <form class="form-default" action="" method="post" >
        
                <h2>Login Here</h2>
                <div class="form-input">
                    <label for="name">Email</label>
                    <input  type="email" name="email" placeholder="Email">
                </div>
                <div class="form-input">
                    <label for="name">Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="form-input">
                <label>Select Type</label>
                </div>
                <div>
                <input type="radio" id="html" name="type" value="Admin">
                <label for="html" class="text-light">Admin</label>
                <input type="radio" id="html" name="type" value="Trainer">
                <label for="html" class="text-light">Trainer</label>
                <input type="radio" id="html" name="type" value="User">
                <label for="html" class="text-light">User</label>
                </div>
                
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="login">
                </div>
                
                <!-- Forget Password -->
                <a href="#" class="forget">Forget Password</a>
                <!-- Forget Password -->
                <a href="register.html" class="registration">Registration</a>
            </div>
        </form>
        <!-- /end login form -->
    </main>


    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Video bg -->
    <script src="./assets/js/jquery.vide.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
    session_start();
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $type = $_REQUEST['type'];

    include "config.php";
    if($type=='Admin'){
        $q="select * from `admin` where email = '$email' and password = '$password'";
        $r =  mysqli_query($con,$q);
        if($row=mysqli_fetch_array($r))
        {
            $_SESSION['adminemail']=$email;
            $_SESSION['id']=$row['id'];
            $_SESSION['name']=$row['name'];
            echo "<script>window.location.assign('./admin/dashboard.php?msg=login successfull')</script>";
        }
        else{
            echo "<script>window.location.assign('login.php?msg=Please Check your Credentials again')</script>";
        }
    }
    else if($type=='Trainer'){
        $q="select * from `trainer_register` where email = '$email' and password = '$password'";
        $r =  mysqli_query($con,$q);
        if($row=mysqli_fetch_array($r))
        {
            if($row['status']=='Approved'){
                $_SESSION['traineremail']=$email;
                $_SESSION['id']=$row['id'];
                $_SESSION['name']=$row['name'];
                echo "<script>window.location.assign('./trainer/dashboard.php?msg=login successfull')</script>";
            }
            else
                echo "<script>window.location.assign('login.php?msg=Please Wait for Approval to Login')</script>";
        }
        else{
            echo "<script>window.location.assign('login.php?msg=Please Check your Credentials again')</script>";
        }
    }
    else if($type=='User'){
        $q="select * from `user` where email = '$email' and password = '$password'";
        $r =  mysqli_query($con,$q);
        if($row=mysqli_fetch_array($r))
        {
            $_SESSION['useremail']=$email;
            $_SESSION['id']=$row['id'];
            $_SESSION['name']=$row['name'];
            echo "<script>window.location.assign('index.php')</script>";
        }
        else{
            echo "<script>window.location.assign('login.php?msg=Please Check your Credentials again')</script>";
        }
    }
    else{
        echo "<script>window.location.assign('login.php?msg=Please Check your Credentials again')</script>";
    }
            }
        ?>
<?php include "footer.php" ?>