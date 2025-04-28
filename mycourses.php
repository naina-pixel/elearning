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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">My courses</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="mycourses.php">My Courses</a></li> 
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
                            <h2>My courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php 
                    include "config.php";

                    $q="select applications.*, trainer_register.name, trainer_register.email,courses.course_name,courses.duration,courses.price,courses.image
                    from applications
                    inner join trainer_register
                    on applications.trainer_id=trainer_register.id
                    inner join courses 
                    on applications.course_id=courses.id where applications.user_id='$_SESSION[id]'";
                    $result = mysqli_query($con, $q);
					$i=1;
					while($row=mysqli_fetch_array($result)){
						?>
                        
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30" style="border:3px solid violet">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                   <img src="upload/<?php echo $row['image']?>" height="200px" width="100%" alt="">
                                </div>
                                <div class="properties__caption">
                               
                                    <p>Course:<?php echo $row['course_name']?></p>                             
                                    <p>Duration:<?php echo $row['duration']?></p>
                                    <p>Price:<?php echo $row['price']?></p>
                                    <p>Status:<?php echo $row['status']?></p>


                                    <div class="d-flex justify-content-center">
                                         <?php
                                        if($row['status']=="Approved" || $row['status']=="Complete"){
                                        ?>
                                        <a href="mytutorials.php?id=<?php echo $row['course_id'];?>">
                                        <button class="btn">
                                  
                                        View Tutorials
                                        </button>
                                        </a>
                                        <?php
                                        }else{               
                                        ?>
                                        <a href="mytutorials.php?id=<?php echo $row['course_id'];?>">
                                        <button class="btn" disabled>
                                        View Tutorials
                                        </button></a>
                                        <?php
                                        }
                                        ?>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                
                    <?php $i++;}?>
                   
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        

    </main>
<?php include "footer.php" ?>