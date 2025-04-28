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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Trainers</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="trainers.php">Trainer</a></li> 
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
       
        <!--? Team -->
        <section class="team-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our Trainers</h2>
                        </div>
                    </div>
                </div>
                <div class="team-active">
                <?php
                include "config.php";
                $query="select * from `trainer_register` where status= 'Approved'";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($result)){

                ?>
                <a href="trainer_courses.php?id=<?php echo $row['id'];?>">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="upload/<?php echo $row['image'];?>" height="200px" width="100%" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html"><?php echo $row['name'];?></a></h5>
                            <p>Contact:<?php echo $row['contact'];?></p>
                            <p>Address:<?php echo $row['address'];?></p>
                        </div>
                    </div>
                </a>
                    <?php }?>
                </div>
            </div>
        </section>
        <!-- Services End -->
    </main>
<?php include "footer.php" ?>