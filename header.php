<?php session_start();?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
    <!-- ? Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <!-- <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a> -->
                                    <h1 class="text-light" style="font-size:40px">Find My Tutor</h1>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active"><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="categories.php">Categories</a></li>
                                                <li><a href="trainers.php">Trainers</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                                <!-- Button -->
                                                <?php if(isset($_SESSION['email'])){?>
                                                    <li><a href="mycourses.php">My Courses</a></li>
                                                    <li class="button-header"><a href="logout.php" class="btn btn3">Log out</a></li>
                                                    <?php } else {?>
                                                <li><a class="margin-left btn btn-secondary" href="#">Register</a>
                                                    <ul class="submenu">
                                                        <li><a href="trainer_register.php">Trainer</a></li>
                                                        <li><a href="user_register.php">User</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="margin-left btn btn-secondary" href="#">Login</a>
                                                    <ul class="submenu">
                                                        <li><a href="admin_login.php">Admin</a></li>
                                                        <li><a href="trainer_login.php">Trainer</a></li>
                                                        <li><a href="user_login.php">User</a></li>
                                                    </ul>
                                                </li>
                                                <?php }?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>