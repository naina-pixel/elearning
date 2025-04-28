<?php include "admin_header.php" ?>
<link rel="stylesheet" href="mystyle.css">

<?php
        include "config.php";
        $query = "select * from `categories`";
        $query1=  "select * from `trainer_register`";
        $query2=  "select * from `applications`";
        $query3=  "select * from `users`";
        $result = mysqli_query($con, $query);
        $result1 = mysqli_query($con, $query1);
        $result2 = mysqli_query($con, $query2);
        $result3 = mysqli_query($con, $query3);
        $totalCategories = mysqli_num_rows($result); // Counting total categories
        $totalTrainers = mysqli_num_rows($result1);
        $totalApplications = mysqli_num_rows($result2);
        $totalUsers = mysqli_num_rows($result3);
        ?>

  <!--? slider Area Start-->
  <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Admin Dashboard</h1>
                                    <!-- breadcrumb Start-->
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
<div class="services-area services-area2 section-padding40">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-5 col-md-6 col-sm-8 card p-5">
                        <div class="single-services mt-3">
                            <div class="features-icon">
                                <img src="/assets/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                                </svg>    
                                <?php echo $totalCategories; ?></h1>
                                <h3>Categories</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-8 card p-5 offset-md-1">
                        <div class="single-services mt-3">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon2.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>    
                                <?php echo $totalTrainers; ?></h1>
                                <h3>Trainers</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-8 card p-5 mt-5">
                        <div class="single-services mt-3">
                            <div class="features-icon">
                            <img src="assets/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8m0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5"/>
                                </svg> 
                                <?php echo $totalApplications; ?></h1>
                                <h3>Applications</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-8 card p-5 mt-5 offset-md-1">
                        <div class="single-services mt-3">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg>
                                <?php echo $totalUsers; ?></h1>
                                <h3>Users</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include "footer.php" ?>