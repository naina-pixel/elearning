<?php include "header.php" ?>
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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Our Categories</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="categories.php">Categories</a></li> 
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
                            <h2>Expore By Categories</h2>
                        </div>
                    </div>
                </div>
            <!--? top subjects Area Start -->
        <div class="topic-area">
            <div class="container">
                <div class="row justify-content-center">
                </div>
                <div class="row justify-content-center">
                <?php
                
                include "config.php";
                $query="select * from `categories`";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($result)){
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                       <div class="single-topic text-center mb-30">
                       <a href="courses.php?id=<?php echo $row['id'];?>">
                            <div class="topic-img">
                                <img src="upload/<?php echo $row['image'];?>" height="200px" width="200px" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="courses.php?id=<?php echo $row['id'];?>"><?php echo $row['category_name'];?>"</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </a>
                    </div>
                    <?php }?>
                   
                  
                  
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