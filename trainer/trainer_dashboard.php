<?php include "trainer_header.php" ?>
<link rel="stylesheet" href="../admin/mystyle.css">
<?php
        include "../config.php";
        $query = "select * from `courses` where `trainer_id` = '$_SESSION[id]'";
        $query1=  "select * from `tutorials` where `trainerid` = '$_SESSION[id]'";
        $query2=  "select * from `applications` where `trainer_id` = '$_SESSION[id]'";
        $result = mysqli_query($con, $query);
        $result1 = mysqli_query($con, $query1);
        $result2 = mysqli_query($con, $query2);
        $totalCourses = mysqli_num_rows($result); // Counting total categories
        $totalTutorials = mysqli_num_rows($result1);
        $totalApplications = mysqli_num_rows($result2);
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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Trainer Dashboard</h1>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
                                <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                                </svg>    
                                <?php echo $totalCourses; ?></h1>
                                <h3>Courses</h3>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-play-fill" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6 6.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43V6.884z"/>
                                </svg>    
                                <?php echo $totalTutorials; ?></h1>
                                <h3>Tutorials</h3>
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
                </div>
            </div>
        </div>
<?php include "../footer.php" ?>