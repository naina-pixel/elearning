<?php include "header.php" ?>
<?php 
include "config.php";
$id=$_REQUEST['id'];
$query="select * from `courses` where category_id='$id'";
$result=mysqli_query($con,$query);
 ?>
<main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Our courses</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="courses.php">Our Courses</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our featured courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                <?php 
					$i=1;
					while($row=mysqli_fetch_array($result)){
						?>
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30" style="border:3px solid violet">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="upload/<?php echo $row['image']?>" height="200px" width="100%" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Course:<?php echo $row['course_name']?></p>
                                    
                                    <p>Duration:<?php echo $row['duration']?>
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="price">
                                            <span>Price:
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                            <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>   
                                            <?php echo $row['price']?></span>
                                        </div>
                                    </div>
                                    <?php if(isset($_SESSION['email'])){?>
                                    <form action="apply.php" method="post">
                                    <input type="hidden" name="course_id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="trainer_id" value="<?php echo $row['trainer_id']; ?>">
                                    <button type="submit" class="border-btn border-btn2" name="apply_now">Apply Now</button>
                                </form>
                                <?php } else { ?>
                                        <p>Please Login to apply!!</p>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++;}?>
                   
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        
        <!-- ? services-area -->
        <div class="services-area services-area2 section-padding40">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>60+ UX courses</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon2.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Expert instructors</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Life time access</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include "footer.php" ?>