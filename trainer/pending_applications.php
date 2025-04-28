<?php

// session_start();
include "trainer_header.php";  ?>
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Applications</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="trainer_dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="pending_applications.php">Pending Applications</a></li> 
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
    
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php
                  if(isset($_REQUEST['msg']))
                  {

                    echo '<div class="alert alert-info mt-5">'.$_REQUEST['msg'].'</div>';
                  }
              ?>
                    <h1 class="tittle display-1 text-center">Applications</h1>
                </div>
                <div class="col-lg-10 offset-md-1 mt-5 box1">
                <table class="table table-bordered table-hover">
                            <tr>
                                <th>S.No.</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Course</th>
                                 <th>Course Duration</th>
                                 <th>Price</th>   
                                <th>Status</th>
                                <th>Action</th>


                            </tr>
                            <?php 
                                $s=1;
                                include "../config.php";
                                $tid=$_SESSION['id'];
                              
                                $q="select applications.*,users.name, users.email,users.contact,courses.course_name,courses.duration,courses.price
                                    from applications
                                    inner join users
                                    on applications.user_id=users.id
                                    inner join courses 
                                    on applications.course_id=courses.id where applications.trainer_id='$tid'";
                                    $result=mysqli_query($con,$q);
                               
                                while($row=mysqli_fetch_array($result)){
             
                                    
                             ?>
                                 <tr> 
                                <td><?php echo $s;?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['contact']?></td>
                                <td><?php echo $row['course_name']?></td>
                                <td><?php echo $row['duration']?></td>
                                <td><?php echo $row['price']?></td>
                                <td><?php echo $row['status']?></td>
                                <td>
                    <?php
                    if($row['status']=="Pending"){
                        ?>
                        <a href="update_status.php?id=<?php echo $row['id']?>&status=Approved"><button style="background-color:green; padding:10px; border:0px;border-radius:10px"><i class="bi bi-check2"></i></button></a>
                        <a href="update_status.php?id=<?php echo $row['id']?>&status=Declined"><button style="background-color:crimson; padding:10px; border:0px;border-radius:10px"><i class="bi bi-x-lg"></i></button></a>
                        <?php
                    }
                    else if($row['status']=="Approved")
                    {
                        ?>
                                            <a href="update_status.php?id=<?php echo $row['id']?>&status=Complete"><button style="background-color:skyblue;color:black; padding:10px; border:0px;border-radius:10px">Complete</button></a>

                        <?php
                    }else{
                        echo $row['status'];
                    }
                    ?>

                </td>
                </tr>

                            <?php
                            $s++;
                            }
                            ?>
                            
                        </table>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

     
<?php include "../footer.php" ?>